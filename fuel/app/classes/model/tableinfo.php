<?php

class Model_tableinfo extends Model
{
	public $roundCount = 1;
	public $currentTheme;
	public $currentPlayer = 0;
	public static $playerArray = array(8);
	public $thatCardArray = array();
	public $votesArray = array();
	
	public static function setPlayerArrayValue($number)
	{
		self::$playerArray = array($number);
		self::$playerArray = array('1' => 'aaa','2' => 'bbb','3' => 'ccc','4' => 'ddd');
		echo count(self::$playerArray);
		exit;
	}
	
	public function picThemeCard()
	{
		$currentTheme = Model_Deckinfo::$themeStock[self::$roundCount];
		self::$roundCount += 1;
	}
}
