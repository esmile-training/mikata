<div>
	<script type="text/javascript">
		function modalup(word){
			
		}
	</script>
		
<?php 
	$i = 1;
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo '<a class="modal_btn cfmanser">';
		echo $mikata_answer[$value]['answer'];
		echo '</a>';
		echo '</br>';
		$i++;
	}
	echo View::forge('popup/wrap', array('name' => 'cfmanser', 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer']));
?>
</div>