<?php

class Model_Deckinfo extends Model
{
	static $_myWorldCardAll = 162;
	static $_thatCardAll = 392;
	public static $themeStock = array();
	public static $answerStock = array();
	
	public static function shuffleCard()
	{
		$themeCardAll = self::$_myWorldCardAll;
		$answerCardAll = self::$_thatCardAll;
		
		self::$themeStock = array($themeCardAll);
		self::$answerStock = array($answerCardAll);
		
		for ($n = 1; $n <= $themeCardAll; $n++)
		{
			self::$themeStock[$n] = $n;
		}
		shuffle(self::$themeStock);
		
		for ($m = 1; $m <= $answerCardAll; $m++)
		{
			self::$answerStock[$m] = $m;
		}
		shuffle(self::$answerStock);
		
		return array("themeStock" => self::$themeStock, "answerStock" => self::$answerStock);
	}
	
	public static function viewCard()
	{
		print_r(self::$answerStock);
	}
}
