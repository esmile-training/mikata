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
		Model_Handinfo::picThatCard();
                print_r($this->view_data);
                exit;
		//Response::redirect('testpage');
		View_Wrap::contents('testpage', $this->view_data);
	}
}