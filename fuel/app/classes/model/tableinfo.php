<?php

class Model_tableinfo extends Model
{
	public $roundCount = 1;
	public $currentTheme;
	public $thatCardArray = array();
	public $votesArray = array();
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[$roundCount];
	}
}
