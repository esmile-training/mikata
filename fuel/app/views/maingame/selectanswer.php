<div>
	<?php $count = 1; ?>
	<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
		<br>
	<?php foreach ($game['hand'][$game['table']['status']['currentPlayer']] as $value): ?>
		
		<a class="modal_btn checkanswer"><?= $mikata_answer[$value]['answer'] ?></a>
		<?= View::forge('popup/wrap', array('name' => 'checkanswer','size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer'])); ?>
		
		<?php $count++; ?>
		
		<br>
		
	<?php endforeach; ?>
</div>