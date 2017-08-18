<?php

class Controller_confPlayer extends Controller_Base_Game
{
	public function action_index()
	{
		$this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');
		
		print_r($this->view_data);
		exit;
		
		return View_Wrap::contents('confplayer',$this->view_data);
	}
}
