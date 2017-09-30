<div>
<?php
	$count = 1;
	echo $mikata_theme[$game['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($game['hand'][$game['table']['status']['currentPlayer']] as $value)
	{
		//echo '<a class="modal_btn cfmanser '.$count.'">';
		echo '<a class="modal_btn cfmanser">';
		echo '<a>'.$mikata_answer[$value]['answer'].'</a>';
		echo View::forge('popup/wrap', array('name' => 'checkanswer', 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer']));
		echo '</br>';
		$count++;
	}
?>
</div>