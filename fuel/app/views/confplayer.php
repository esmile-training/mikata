<div>
	<script type="text/javascript">
		function modalup(word){
			
		}
	</script>
		
<?php 
	$count = 1;
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo '<a class="modal_btn cfmanser "'.$count.' >';
		echo $mikata_answer[$value]['answer'];
		echo '</a>';
		echo View::forge('popup/wrap', array('name' => 'cfmanser '.$count, 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer']));
		echo '</br>';
		$count++;
	}
	
?>
</div>