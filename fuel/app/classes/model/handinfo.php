<?php

class Model_Handinfo extends Fuel\Core\Model
{
	public static $handarray = array(array());
	
	public static function createPlayerHand()
	{	
		for($n = 1; $n <= 12; $n++)
		{
			for($m = 1; $m <= count(Model_tableinfo::$playerArray); $m++)
			{
				self::$handarray[$m][$n] = array_shift(Model_Deckinfo::$anserStock);
			}
		}
	}
}
