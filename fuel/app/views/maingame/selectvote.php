	<?php $num = range(0, count($game['table']['playerArray']) -1); ?>
	<?php shuffle($num); ?>
<div>
	<?php $count = 0; ?>
	<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
	<br>
	<?php foreach($num as $value): ?>
		<a class="modal_btn checkvote<?= $count ?>">
		<?= $game['table']['status']['thatCardArray'][$value] ?>
		</a>
		<?= View::forge('popup/wraps', array('name' => 'checkvote', 'count' => $count, 'size' => 'normal', 'popup_data' => $value)); ?>
		<br>
		<?php $count++; ?>
    <?php endforeach; ?>
</div>
