<?php

class Controller_confPlayer extends Controller_Base_Game
{
	public function action_index()
	{	
		$table = $_SESSION['game']['table'];
		$themeStock = $_SESSION['game']['deck']['themeStock'];
		
		$this->view_data['mikata_theme'] = $this->csv->getAll('/mikata/theme');
		exit;
		$this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');
		exit;
		//$_SESSION['game']['table']['status']['currentTheme'] = Model_tableinfo::picThemeCard($table[1],$themeStock);
		
		return View_Wrap::contents('confplayer',$this->view_data);
	}
}
