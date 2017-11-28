<?php

class Model_tableinfo extends Model
{
	public static $roundCount = 1;
	public static $currentTheme;
	public static $currentPlayer = 10;
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
	
	public static function  setScoreArray(array $playerArray)
	{
            foreach($playerArray as $value){
                self::$playerScoreArray[$value] = 0;
            }
            return self::$playerScoreArray;
	}

	public static function setThatArray(array $playerArray)
	{
            foreach($playerArray as $value){
		self::$thatCardArray[$value] = NULL;
            }
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
