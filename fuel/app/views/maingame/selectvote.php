	<?php $num = range(0, count($game['table']['playerArray'])); ?>
	<?php $splice = array_splice($num, $game['table']["status"]["currentPlayer"]%10 + 1, 1)?>
	<?php shuffle($num); ?>
<?= var_dump($splice) ?>
<div>
	<?php $count = 0; ?>
	<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
	<br>
	<?php foreach($num as $value): ?>
		<a class="modal_btn checkvote<?= $count ?>">
		<?= $word = $game['table']['thatCardArray'][$value] ?>
		</a>
		<?= View::forge('popup/wraps', array('name' => 'checkvote', 'count' => $count, 'size' => 'normal', 'popup_data' => $word)); ?>
		<br>
		<?php $count++; ?>
    <?php endforeach; ?>
</div>
