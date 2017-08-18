<div>
<?php 
	$i = 1;
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo '<a class="modal_btn cfmanser'.$i.'">';
		echo $mikata_answer[$value]['answer'];
		echo '</a></br>';
		echo View::forge('popup/wrap', array('name' => 'cfmanser', 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer']));
		$i++;
	}
	echo '<br>';
	foreach($_SESSION['game']['hand']['chino'] as $value)
	{
		echo $mikata_answer[$value]['answer'];
		echo '</br>';
	}
	echo '<br>';
	foreach($_SESSION['game']['hand']['rize'] as $value)
	{
		echo $mikata_answer[$value]['answer'];
		echo '</br>';
	}
?>
</div>