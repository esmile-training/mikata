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
		printf($param);
		Model_tableinfo::setPlayerArrayValue($param);
		print_r(Model_tableinfo::$playerArray);
		exit;
	}
}
