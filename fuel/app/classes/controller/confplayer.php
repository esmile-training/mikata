<?php

class Controller_confPlayer extends Controller_Base_Game
{
	public function action_index()
	{
		print_r($this->view_data['game']);
		exit;
		
		$this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');
		
		return View_Wrap::contents('confplayer',$this->view_data);
	}
}
