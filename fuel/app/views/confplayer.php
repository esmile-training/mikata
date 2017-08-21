<div>
	<script type="text/javascript">
		function modalup(){
			console.log("click");
			$(this).attr("modal_btn cfmanser");
		}
	</script>
		
<?php 
	$count = 1;
	echo $mikata_theme[$_SESSION['game']['table']['status']['currentTheme']]['theme'];
	echo '<br>';
	foreach($_SESSION['game']['hand']['cocoa'] as $value)
	{
		echo '<a onclick = "modalup(); return false;">';
		echo $mikata_answer[$value]['answer'];
		echo '</a>';
		echo View::forge('popup/wrap', array('name' => 'cfmanser', 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer']));
		echo '</br>';
		$count++;
	}
	
?>
</div>