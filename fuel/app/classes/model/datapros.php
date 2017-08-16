<?php

class Model_datapros extends Model
{
	public static $test;
	
	public static function imploadGameArray($game)
	{
		$param['player'] = implode(",",$game['player']);
		$param['themeStock'] = implode(",",$game['card']['themeStock']);
		$param['anserStock'] = implode(",",$game['card']['anserStock']);
		foreach ($game['player'] as $value)
		{
			$param[$value] = implode(",",$game['hand'][$value]);
		}
		return $param;
	}
}
