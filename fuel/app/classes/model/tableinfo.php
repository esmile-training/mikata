<?php

class Model_tableinfo extends Model
{
	public $roundCount = 1;
	public $currentTheme;
	public $currentPlayer = 0;
	public static $playerNumber;
	public static $playerArray = array();
	public $thatCardArray = array();
	public $votesArray = array();
	
	public static function setPlayerArrayValue($players = array())
	{
		self::$playerArray = array($players[0]);
	}
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[self::$roundCount];
		self::$roundCount += 1;
	}
}
