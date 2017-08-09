<?php

class Controller_Setplayernumber extends Controller_Base_Game
{
	public function action_index()
	{
		View_Wrap::contents('setplayernumber', $this->view_data);
	}
	
	public function action_getPlayerNumber()
	{
		$param = input::post();
		//人数分の手札配列を作る処理
		
		Model_tableinfo::setPlayerArrayValue($param['player']);
		//プレイヤー一覧の配列初期化用のメソッド
		
		echo count(Model_tableinfo::$playerArray);
		exit;
		
		//名前入力画面に遷移
		View_Wrap::contents('entername',$this->view_data);
	}
}
