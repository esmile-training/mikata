<div>
	<?php $count = 1; ?>
	<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
	<br>
	<?php foreach($game['hand'][$game['table']['status']['currentPlayerName']] as $value): ?>
            <a class="modal_btn checkanswer<?= $count ?>">
            <?= $mikata_answer[$value]['answer'] ?>
            </a>
            <?= View::forge('popup/wraps', array('name' => 'checkanswer', 'count' => $count, 'size' => 'normal', 'popup_data' => array('word' => $mikata_answer[$value]['answer'], 'id' => $value))); ?>
            <br>
            <?php $count++; ?>
    <?php endforeach; ?>
</div>
