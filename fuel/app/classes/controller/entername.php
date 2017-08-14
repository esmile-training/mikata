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

		//プレイヤー名を配列に格納
		$this->game['player'] = Model_tableinfo::setPlayerArrayValue($param);
		
		//山札をシャッフルする
		$this->game['card'] = Model_Deckinfo::shuffleCard();
		
		//山札から手札を配る
		$this->game['hand'] = Model_Handinfo::createPlayerHand();
		
		$this->view_data['game'] = $this->game;
                
                print_r ($this->view_data['game']);
                
		//一番目のプレイヤーの待機画面に遷移
		//Response::redirect('testpage');	//実験的にコメントアウト
		View_Wrap::contents('testpage', $this->view_data, $this->game);	//実験的に記述
	}
}
