<?php

class Controller_entername extends Controller_Base_Game
{	
	public function action_index()
	{
		View_Wrap::contents('entername',$this->view_data);
	}
	
	public function action_setPlayerName()
	{
		$param = input::post();
		
		//ラウンド数、現在のテーマID、現在の操作プレイヤーの配列
		$this->game['table']['status'] = array('roundCount' => Model_tableinfo::$roundCount, 'currentTheme' => Model_tableinfo::$currentTheme, 'currentPlayer' => Model_tableinfo::$currentPlayer);
		
		//プレイヤーが出したそれカードの格納配列
		$this->game['table']['thatCardArray'] = Model_tableinfo::setThatArray();
		
		//投票用の配列
		$this->game['table']['votesArray'] = Model_tableinfo::setVotesArray();
		 
		//プレイヤー名を配列に格納
		$this->game['table']['player'] = Model_tableinfo::setPlayerArrayValue($param);
		
		//プレイヤーのスコア格納配列
		$this->game['table']['playerScoreArray'] = Model_tableinfo::setScoreArray();
		
		//山札をシャッフルする
		$this->game['deck'] = Model_Deckinfo::shuffleCard();
		
		//山札から手札を配る
		$this->game['hand'] = Model_Handinfo::createPlayerHand();
		
		$this->view_data['game'] = $this->game;
                
		//一番目のプレイヤーの待機画面に遷移
		//Response::redirect('confPlayer');	//実験的にコメントアウト
		View_Wrap::contents('confPlayer', $this->view_data);	//実験的に記述
	}
}
