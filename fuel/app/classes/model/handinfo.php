<?php

class Model_Handinfo extends Fuel\Core\Model
{
	public static $handarray = array();
	
	public static function createPlayerHand()
	{	
		for($n = 1; $n <= 12; $n++)
		{
			for($m = 1; $m = Model_tableinfo::$playerNumber; $m++)
			{
				//self::$handarray[$m][$n] = array_shift(Model_Deckinfo::$anserStock);
				var_dump(Model_Deckinfo::$anserStock[1]);
			}
		}
		exit;
	}
}
