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

		//人数を変数に格納
		Model_tableinfo::$playerNumber = $param['player'];
		
		//名前入力画面に遷移
		Response::redirect('enterName');
	}
}
