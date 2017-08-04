<?php

class Controller_inputName extends Controller_Base_Game
{
	public function action_index()
	{
		View_Wrap::contents('inputName', $this->view_data);
	}
}
