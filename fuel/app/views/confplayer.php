<div>
<?php 
	foreach($_SESSION['game']['hand']['chino'] as $value)
	{
		echo $mikata_answer[$value]['answer'];
		echo '</br>';
	}
	print_r($_SESSION['game']['hand']);
?>
</div>