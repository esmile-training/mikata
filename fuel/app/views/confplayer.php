<div>
<?php 
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo '<p><a class="modal_btn def">';
		echo $mikata_answer[$value]['answer'];
		echo '</a></p></br>';
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