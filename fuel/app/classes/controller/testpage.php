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

		foreach ($param as $key => $value) 
		{
			$param[$key] = explode(",",$value);
		}
		$game['table'] = array('status' => $param['statsu'], 'player' => $param['player'], 'deck'=>array('themeStock' => $param['themeStock'], 'anserStock' => $param['anserStock']));
		foreach ($game['player'] as $value)
		{
			$game['hand'][$value] = $param[$value];
		}
		$this->view_data['game'] = $game;
		
		//Model_Handinfo::picThatCard();
		//Response::redirect('testpage');
		View_Wrap::contents('testpage', $this->view_data);
	}
}
