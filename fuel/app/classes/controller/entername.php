<?php

class Controller_entername extends Controller_Base_Game
{	
	public function action_index()
	{
		View_Wrap::contents('entername',$this->view_data);
	}
	
	public function action_setPlayerName()
	{
		$param = input::post();
                if($param['submit_x']){unset($param['submit_x']);}
                if($param['submit_y']){unset($param['submit_y']);}
                
		//プレイヤー名を配列に格納
		$this->game['table']['player'] = Model_tableinfo::setPlayerArrayValue($param);
			
		$_SESSION['game'] = $this->game;
		
		//一番目のプレイヤーの待機画面に遷移
		Response::redirect('maingame/index');
	}
}
