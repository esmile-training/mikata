<?php

class Controller_Testpage extends Controller_Base_Game
{
	public function action_index()
	{
                echo ($this->user);
                print_r($this->user);
                var_dump($this->user);
                exit;
                
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
		print_r($this->view_data);
		exit;
		View_Wrap::contents('testpage', $this->view_data);
	}
}