<div>
<?php 
	$count = 1;
	echo $mikata_theme[$game['table']['status']['currentTheme']];
	echo '<br>';
	foreach($game['hand'][$game['table']['playerArray'][$game['table']['status']['currentPlayer']]] as $value)
	{
		echo '<a class="modal_btn cfmanser '.$count.'">';
		echo $mikata_answer[$value]['answer'];
		echo '</a>';
		echo View::forge('popup/wrap', array('name' => 'cfmanser', 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer']));
		echo '</br>';
		$count++;
	}
	
?>
</div>