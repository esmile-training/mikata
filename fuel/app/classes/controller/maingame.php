<?php

class Controller_maingame extends Controller_Base_Game
{
    public function action_first()
    {
        //ラウンド数、現在のテーマID、現在の操作プレイヤーの配列
        $this->game['table']['status'] = array('roundCount' => Model_tableinfo::$roundCount, 'currentTheme' => Model_tableinfo::$currentTheme, 'currentPlayer' => Model_tableinfo::$currentPlayer);
        
        //プレイヤーの配列をセッションから取り出し
        $this->game['table']['playerArray'] = $_SESSION['game']['table']['player'];
        
        //山札をシャッフルする
        Model_Deckinfo::shuffleCard();
        
        //山札から手札を配る
        $this->game['hand'] = Model_Handinfo::createPlayerHand($this->game['table']['playerArray']);
        
        //プレイヤーが出したそれカードの格納配列
        $this->game['table']['thatCardArray'] = Model_tableinfo::setThatArray($this->game['table']['playerArray']);

        //投票用の配列
        $this->game['table']['votesArray'] = Model_tableinfo::setVotesArray();

        //プレイヤーのスコア格納配列
        $this->game['table']['playerScoreArray'] = Model_tableinfo::setScoreArray($this->game['table']['playerArray']);
        
        $_SESSION['game'] = $this->game;
        $this->action_index();
    }
    
    public function action_index()
    {				
        $this->game = $_SESSION['game'];
        
        //お題カードを引く
        $this->game['table']['status']['currentTheme'] = array_shift(Model_Deckinfo::$themeStock);

        //全プレイヤーが一枚ずつ回答カードを引く
        foreach ($this->game['table']['playerArray'] as $key)
        {
            array_push($this->game['hand'][$key], Model_Handinfo::picThatCard());
        }

        //山札から一枚CPU用の回答カードを引く
        $answer = $this->csv->getAll('/mikata/answer');
        $thatCard = Model_Handinfo::picThatCard();
        var_dump($thatCard);exit;
        $this->game['table']['thatCardArray']['cpu'] = $answer[$thatCard]['answer'];

        //山札から引いたカード用の投票枠作成
        $this->game['table']['votesArray'][$answer[$thatCard]['answer']] = 0;

        $_SESSION['game'] = $this->game;

        return View_Wrap::contents('maingame/checkplayer',$this->view_data);
    }

    public function action_start()
    {
            //お題カードを引く
    $this->game['table']['status']['currentTheme'] = array_shift(Model_Deckinfo::$themeStock);
    }

    public function action_selectAnswer()
    {
        //csvファイルの読み込み
        $this->view_data['mikata_theme'] = $this->csv->getAll('/mikata/theme');
        $this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');

        $this->view_data['game'] = $_SESSION['game'];
        return View_Wrap::contents('maingame/selectanswer',$this->view_data);
    }

    public function action_enterAnswer()
    {
        $param = input::post('answer');
        $id = input::post('id');
        $_SESSION['game']['table']['thatCardArray'][$_SESSION['game']['table']['status']['currentPlayerName']] = $param;
        $_SESSION['game']['table']['votesArray'][$param] = 0;
        $workArray = array_diff($_SESSION['game']['hand'][$_SESSION['game']['table']['status']['currentPlayerName']],array($id));
        $_SESSION['game']['hand'][$_SESSION['game']['table']['status']['currentPlayer'] % 10] = array_values($workArray);

        if($_SESSION['game']['table']['status']['currentPlayer'] % 10 >= count($_SESSION['game']['table']['playerArray']) - 1)
        {
                $_SESSION['game']['table']['status']['currentPlayer'] = 20;
        } else {
                $_SESSION['game']['table']['status']['currentPlayer'] += 1;
        }

        $this->view_data['game'] = $_SESSION['game'];
        return View_Wrap::contents('maingame/checkplayer',$this->view_data);
    }

    public function action_selectVote()
    {
        //csvファイルの読み込み
        $this->view_data['mikata_theme'] = $this->csv->getAll('/mikata/theme');
        $this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');

        $this->view_data['game'] = $_SESSION['game'];
        return View_Wrap::contents('maingame/selectvote',$this->view_data);
    }

    public  function action_enterVote()
    {
        $param = input::post('vote');
        $_SESSION['game']['table']['votesArray'][$param] += 1;
        $this->view_data['game'] = $_SESSION['game'];

        if($_SESSION['game']['table']['status']['currentPlayer'] % 10 >= count($_SESSION['game']['table']['playerArray']) - 1)
        {
            $this->view_data['mikata_theme'] = $this->csv->getAll('/mikata/theme');
            $this->action_result();
        } else {
            $_SESSION['game']['table']['status']['currentPlayer'] += 1;
            return View_Wrap::contents('maingame/checkplayer',$this->view_data);
        }
    }

    public function action_result()
    {
        $this->view_data['game'] = $_SESSION['game'];
        return View_Wrap::contents('maingame/result',$this->view_data);
    }
}
