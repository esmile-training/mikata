<?php

class Model_tableinfo extends Model
{
	public $roundCount = 1;
	public $currentTheme;
	public $currentPlayer = 0;
	public static $playerNumber;
	protected static $playerArray = array();
	public $thatCardArray = array();
	public $votesArray = array();
	
	public static function setPlayerNumber($number)
	{
		self::$playerNumber = $number;
	}
	
	public static function setPlayerArrayValue($players = array())
	{
		$n = 1;
		foreach ($players as $value)
		{
			self::$playerArray[$n] = $value;
			$n++;
		}
		return self::$playerArray;
	}
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[self::$roundCount];
		self::$roundCount += 1;
	}
}
