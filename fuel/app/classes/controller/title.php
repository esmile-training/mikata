<?php

class Controller_Title
{
	public function action_index()
	{
		View_Wrap::contents('title',$this->view_data);
	}
}
