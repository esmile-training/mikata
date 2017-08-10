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
		$box;
		foreach(self::$handarray as $name)
		{
			//頭から1枚づつ捨てる処理
			$box = array_shift(self::$handarray[$name]);
			
			//山札から引く処理
			self::$handarray[$name][self::$handall] = array_shift(Model_Deckinfo::$anserStock);
		}
	}
}
