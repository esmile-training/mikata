<?php

class Controller_Testpage extends Controller_Base_Game
{
	public function action_index()
	{
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
//		Model_Handinfo::picThatCard();
		//Response::redirect('testpage');
		$this->view_data['game'] = $this->view_data['game'];
		View_Wrap::contents('testpage', $this->view_data);
	}
}