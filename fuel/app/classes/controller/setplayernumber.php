<?php

class Controller_Setplayernumber extends Controller_Base_Game
{
	public function action_index()
	{
		View_Wrap::contents('setplayernumber', $this->view_data);
	}
	
	public function action_getPlayerNumber($number)
	{
		$param = $number;

		//人数を変数に格納
		Model_tableinfo::setPlayerNumber($param);
		Cache::set('mikata_PlayerNumber',$param);
		//名前入力画面に遷移
		View_Wrap::contents('entername',$this->view_data);
	}
}
