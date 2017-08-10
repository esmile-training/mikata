<?php

class Model_Deckinfo extends Model
{
	static $_myWorldCardAll = 90;
	static $_thatCardAll = 392;
	public static $themeStock = array();
	public static $anserStock = array();
	
	public static function shuffleCard()
	{
		$themeCardAll = self::$_myWorldCardAll;
		$anserCardAll = self::$_thatCardAll;
		
		self::$themeStock = array($themeCardAll);
		self::$anserStock = array($anserCardAll);
		
		for ($n = 1; $n <= $themeCardAll; $n++)
		{
			self::$themeStock[$n] = $n;
		}
		shuffle(self::$themeStock);
		
		for ($m = 1; $m <= $anserCardAll; $m++)
		{
			self::$anserStock[$m] = $m;
		}
		shuffle(self::$anserStock);
		
		return array(self::$themeStock, self::$anserStock);
	}
}
