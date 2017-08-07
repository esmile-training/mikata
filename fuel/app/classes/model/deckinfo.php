<?php

class Model_Deckinfo extends Model
{
	static $_myWorldCardAll = 90;
	static $_thatCardAll = 392;
	public $themeStock = array();
	public $anserStock = array();
	
	public static function shuffleCard()
	{
		$themeCardAll = self::$_myWorldCardAll;
		$anserCardAll = self::$_thatCardAll;
		
		for ($n = 1; $n <= $themeCardAll; $n++)
		{
			$this->themeStock[n] = n;
		}
		shuffle($this->themeStock);
		
		for ($m = 1; $m <= $anserCardAll; $m++)
		{
			$this->anserStock[m] = m;
		}
		shuffle($this->anserStock);
	}
}
