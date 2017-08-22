<?php

class Controller_maingame extends Controller_Base_Game
{
	public function action_index()
	{			
		//ラウンド数、現在のテーマID、現在の操作プレイヤーの配列
		$this->game['table']['status'] = array('roundCount' => Model_tableinfo::$roundCount, 'currentTheme' => Model_tableinfo::$currentTheme, 'currentPlayer' => Model_tableinfo::$currentPlayer);
		
		//プレイヤーが出したそれカードの格納配列
		$this->game['table']['thatCardArray'] = Model_tableinfo::setThatArray();
		
		//投票用の配列
		$this->game['table']['votesArray'] = Model_tableinfo::setVotesArray();
		
		//プレイヤーのスコア格納配列
		$this->game['table']['playerScoreArray'] = Model_tableinfo::setScoreArray();
		
		//山札をシャッフルする
		$this->game['deck'] = Model_Deckinfo::shuffleCard();
		
		//山札から手札を配る
		$this->game['hand'] = Model_Handinfo::createPlayerHand();
		
		//csvファイルの読み込み
		$this->view_data['mikata_theme'] = $this->csv->getAll('/mikata/theme');
		$this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');
		
		//お題カードを引く
		$this->game['table']['status']['currentTheme'] = array_shift($this->game['deck']['themeStock']);
		
		//山札から一枚回答カードを引く
		$this->game['table']['thatCardArray']['0'] = array_shift($this->game['deck']['answerStock']);
		
		$this->view_data['game'] = $this->game;
		
		//Response::redirect('maingame/checkplayer');
		return View_Wrap::contents('maingame/checkplayer',$this->view_data);
	}
	
	public function action_enterAnswer()
	{
		$param = input::post();
	}
}
