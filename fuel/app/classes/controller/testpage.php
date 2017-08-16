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
		$param = input::post();
		$game = array('player' => $param['player'], 'card'=>array('themeStock' => $param['themeStock'], 'anserStock' => $param['anserStock']));
		$this->view_data['game'] = $game;
		print_r($game);
		exit;
		
		//Model_Handinfo::picThatCard();
		//Response::redirect('testpage');
		View_Wrap::contents('testpage', $this->view_data);
	}
}
