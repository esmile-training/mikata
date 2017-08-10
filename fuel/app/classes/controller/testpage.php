<?php

class Controller_Testpage extends Controller_Base_Game
{
	public function action_index()
	{
		Model_DeckInfo::shuffleCard();
		View_Wrap::contents('testpage', $this->view_data);
	}
	
	public function action_selectPlayer()
	{
		$param = input::post();
		//ビュー表示
		Response::redirect('inputname');
	}
	
	public function action_picthatcard()
	{
		var_dump(Model_Handinfo::$handarray);
		exit;
		Model_Handinfo::picThatCard();
		Response::redirect('testpage');
	}
}