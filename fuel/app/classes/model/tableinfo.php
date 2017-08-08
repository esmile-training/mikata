<?php

class Model_tableinfo extends Model
{
	public $roundCount = 1;
	public $currentTheme;
	public $currentPlayer = 0;
	public $playerArray = array();
	public $thatCardArray = array();
	public $votesArray = array();
	
	public function setPlayerArrayValue($number)
	{
		$playerArray = array($number);
	}
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[self::$roundCount];
		self::$roundCount += 1;
	}
}
