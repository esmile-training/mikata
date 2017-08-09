<?php

class Model_tableinfo extends Model
{
	public $roundCount = 1;
	public $currentTheme;
	public $currentPlayer = 0;
	public static $playerArray;
	public $thatCardArray = array();
	public $votesArray = array();
	
	public static function setPlayerArrayValue($number)
	{
		self::$playerArray = array($number);
		echo count(self::$playerArray);
		exit;
	}
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[self::$roundCount];
		self::$roundCount += 1;
	}
}
