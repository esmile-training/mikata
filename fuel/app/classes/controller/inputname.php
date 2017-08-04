<?php

class Controller_inputname extends Controller_Base_Game
{
	public function action_index()
	{
		View_Wrap::contents('inputname', $this->view_data);
	}
}
