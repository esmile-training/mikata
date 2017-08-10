<?php

class Model_Handinfo extends Fuel\Core\Model
{
	public static $handarray = array(array());
	static $handall = 12;
	
	public static function createPlayerHand()
	{	
		for($n = 1; $n <= self::$handall; $n++)
		{
			foreach(Model_tableinfo::$playerArray as $value)
			{
				self::$handarray[$value][$n] = array_shift(Model_Deckinfo::$anserStock);
			}
		}
	}
	
	public static function picThatCard()
	{
		foreach(self::$handarray as $key)
		{
			foreach ($key as $value)
			{
				echo $value;
				//山札から引く処理
				//self::$handarray[$value][12] = array_shift(Model_Deckinfo::$anserStock);
			}
		}
		exit;
	}
}
