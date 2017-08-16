<?php

class Model_Deckinfo extends Model
{
	static $_myWorldCardAll = 90;
	static $_thatCardAll = 392;
	public static $themeStock = array();
	public static $anserStock = array();
	
	public static function shuffleCard()
	{
		$themeCardAll = self::$_myWorldCardAll - 1;
		$anserCardAll = self::$_thatCardAll - 1;
		
		self::$themeStock = array($themeCardAll);
		self::$anserStock = array($anserCardAll);
		
		for ($n = 0; $n <= $themeCardAll; $n++)
		{
			self::$themeStock[$n] = $n;
		}
		shuffle(self::$themeStock);
		
		for ($m = 0; $m <= $anserCardAll; $m++)
		{
			self::$anserStock[$m] = $m;
		}
		shuffle(self::$anserStock);
		
		return array("themeStock" => self::$themeStock, "anserStock" => self::$anserStock);
	}
	
	public static function viewCard()
	{
		print_r(self::$anserStock);
	}
}
