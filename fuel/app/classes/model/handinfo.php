<?php

class Model_Handinfo extends Model
{
	public static $handarray = array(array());
	static $handall = 12;
	
	public static function createPlayerHand($playerArray = array())
	{	
		for($n = 0; $n <= self::$handall - 1; $n++)
		{
			foreach($playerArray as $key=>$value)
			{
				self::$handarray[$key][$n] = array_shift(Model_Deckinfo::$answerStock);
			}
		}
		return self::$handarray;
	}
	
	public static function picThatCard()
	{
//		foreach(self::$handarray as $key)
//		{
//			foreach ($key as $value)
//			{
//				//山札から引く処理
//				//self::$handarray[$value][$handall] = array_shift(Model_Deckinfo::$answerStock);
//			}
//		}
                $respnonse = array_shift(Model_Deckinfo::$answerStock);
                return $respnonse;
	}
}
