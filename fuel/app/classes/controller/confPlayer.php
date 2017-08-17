<?php

class Controller_confPlayer  extends Controller_Base_Game
{
	public function action_index()
	{
		$this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');
		
		var_dump($this->view_data['mikata_answer']);
		
		return View_Wrap::contents('confPlayer',$this->view_data);
	}
}
