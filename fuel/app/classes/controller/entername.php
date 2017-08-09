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
		
		printf(Model_tableinfo::$playerNumber);
		exit;
		//一番目のプレイヤーの待機画面に遷移
		Response::redirect('testpage');
	}
}
