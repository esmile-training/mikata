<div>
<?php 
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo $mikata_answer[$value]['answer'];
		echo '</br>';
	}
?>
</div>