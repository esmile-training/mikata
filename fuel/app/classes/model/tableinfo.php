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
	
	//最初から初期化してある変数は読み込める
	public static $staval = 5;
	
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
	}
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[self::$roundCount];
		self::$roundCount += 1;
	}
}
