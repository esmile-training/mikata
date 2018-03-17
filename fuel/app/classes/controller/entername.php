<?php

class Controller_entername extends Controller_Base_Game
{	
    public function action_index()
    {
        View_Wrap::contents('entername',$this->view_data);
    }

    public function action_setPlayerName()
    {
        $param = input::post('player_name');
		$playerNumber = Cache::get('mikata_PlayerNumber');
        //プレイヤー名を配列に格納
		$_SESSION['game']['table']['player'][] = $param;

		if(count($this->view_data['game']['table']['player']) < $playerNumber)
		{
			View_Wrap::contents('entername',$this->view_data);
		} else {
			//一番目のプレイヤーの待機画面に遷移
			Response::redirect('maingame/first');
		}
    }
}
