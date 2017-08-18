<?php

class Model_tableinfo extends Model
{
	public static $roundCount = 1;
	public static $currentTheme;
	public static $currentPlayer = 0;
	public static $playerNumber;
	public static $playerArray = array();
	public static $playerScoreArray = array();
	public static $thatCardArray = array();
	public static $votesArray = array();
	
	public static function setPlayerNumber($number)
	{
		self::$playerNumber = $number;
	}
	
	public static function setPlayerArrayValue($players = array())
	{
		$n = 0;
		foreach ($players as $value)
		{
			self::$playerArray[$n] = $value;
			$n++;
		}
		return self::$playerArray;
	}
	
	public static function  setScoreArray()
	{
		self::$playerScoreArray = array(self::$playerNumber);
		return self::$playerScoreArray;
	}

	public static function setThatArray()
	{
		self::$thatCardArray = array(self::$playerNumber);
		return self::$thatCardArray;
	}
	
	public static function setVotesArray()
	{
		self::$votesArray = array(self::$playerNumber);
		return self::$votesArray;
	}

	public static function picThemeCard($round, $themeStock = array())
	{
		$themeId = $themeStock[$round];
		return $themeId;
	}
}
