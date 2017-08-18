<?php

class Controller_confPlayer extends Controller_Base_Game
{
	public function action_index()
	{	
		$table = $_SESSION['game']['table'];
		$themeStock = $_SESSION['game']['deck']['themeStock'];
		
		print_r($table);
		exit;
		$this->view_data['mikata_theme'] = $this->csv->getAll('/mikata/theme');
		$this->view_data['mikata_answer'] = $this->csv->getAll('/mikata/answer');
		
		$_SESSION['game']['table']['status']['currentTheme'] = Model_tableinfo::picThemeCard($table['currentTheme'],$themeStock);
		
		return View_Wrap::contents('confplayer',$this->view_data);
	}
}
