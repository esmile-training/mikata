	<?php
            $thatArray = $game['table']['thatCardArray'];
            unset($thatArray[$game['table']["status"]["currentPlayerName"]]);
            shuffle($thatArray);
	?>
<div>
	<?php $count = 0; ?>
	<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
	<br>
	<?php foreach($thatArray as $value): ?>
		<a class="modal_btn checkvote<?= $count ?>">
		<?= $word = $value ?>
		</a>
		<?= View::forge('popup/wraps', array('name' => 'checkvote', 'count' => $count, 'size' => 'normal', 'popup_data' => $word)); ?>
		<br>
		<?php $count++; ?>
    <?php endforeach; ?>
</div>
