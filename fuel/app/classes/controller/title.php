<?php

class Controller_Title extends Controller_Base_Game
{
	public function action_index()
	{
		View_Wrap::contents('title',$this->view_data);
	}
}
