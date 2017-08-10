<?php

class Model_Handinfo extends Fuel\Core\Model
{
	public static $handarray = array(array());
	
	public static function createPlayerHand()
	{	
		var_dump(Model_tableinfo::$playerNumber);
		var_dump(Model_tableinfo::$playerArray);
		var_dump(Model_tableinfo::$staval);
		exit;
		for($n = 1; $n <= 12; $n++)
		{
			for($m = 1; $m <= Model_tableinfo::$playerNumber; $m++)
			{
				self::$handarray[$m][$n] = array_shift(Model_Deckinfo::$anserStock);
			}
		}
	}
}
