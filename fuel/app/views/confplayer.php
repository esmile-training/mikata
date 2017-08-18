<div>
<?php 
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo '<a class="modal_btn cfmanser">';
		echo $mikata_answer[$value]['answer'];
		echo '</a></br>';		
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
	<?= View::forge('popup/wrap', array('name' => 'cfmancer', 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer'])); ?>
</div>