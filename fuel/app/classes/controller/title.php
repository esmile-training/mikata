<?php

class Controller_Title
{
	public function action_index()
	{
		View_Wrap::contents('top',$this->view_data);
	}
}
