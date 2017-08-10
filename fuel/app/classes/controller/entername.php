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

		//プレイヤー名を配列に格納
		Model_tableinfo::setPlayerArrayValue($param);
		
		//山札をシャッフルする
		Model_Deckinfo::shuffleCard();
		
		//山札から手札を配る
		Model_Handinfo::createPlayerHand();
		
		//一番目のプレイヤーの待機画面に遷移
		//プレイたーの人数を持ち越せない。
		//Response::redirect('testpage');	//実験的にコメントアウト
		View_Wrap::contents('testpage', $this->view_data);	//実験的に記述
	}
}
