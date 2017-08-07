<?php

class Controller_Testpage extends Controller_Base_Game
{
	public function action_index()
	{
		Model_deckInfo::shuffleCard();
		$this->view_data = Model_deckInfo::$_myWorldCardAll[3];
		View_Wrap::contents('testpage', $this->view_data);
	}
	
	public function action_selectPlayer()
	{
		$param = input::post();
		//ビュー表示
		Response::redirect('inputname');
	}
}