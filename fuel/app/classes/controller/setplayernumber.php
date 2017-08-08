<?php

class Controller_Setplayernumber extends Controller_Base_Game
{
	public function Action_index()
	{
		View_Wrap::contents('setplayernumber', $this->view_data);
	}
	
	public function Action_getPlayerNumber()
	{
		$param = input::$post();
		//人数分の手札配列を作る処理
		
		//名前入力画面に遷移
		View_Wrap::contents('entername',$this->view_data);
	}
}
