<?php

class Model_Handinfo extends Fuel\Core\Model
{
	public static $handarray = array(array());
	
	public static function createPlayerHand()
	{	
		for($n = 1; $n <= 12; $n++)
		{
			foreach(Model_tableinfo::$playerArray as $value)
			{
				self::$handarray[$value][$n] = array_shift(Model_Deckinfo::$anserStock);
			}
		}
	}
}
