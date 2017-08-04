<?php

class Controller_inputName extends Controller_Base_Game
{
	public function action_index()
	{
		var_dump("aaa");
		exit;
		View_Wrap::contents('inputName', $this->view_data);
	}
}
