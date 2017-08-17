<?php

class Controller_confPlayer  extends Controller_Base_Game
{
	public function action_index()
	{
		View_Wrap::contents('confPlayer',$this->view_data);
	}
}
