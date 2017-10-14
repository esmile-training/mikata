<div>
	<?php $count = 1; ?>
	<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
	<br>
	<?php foreach($game['hand'][$game['table']['status']['currentPlayer']] as $value): ?>
            <a class="modal_btn checkanswer<?= $count ?>">
            <?= $mikata_answer[$value]['answer'] ?>
            </a>
            <?= View::forge('popup/wraps', array('name' => 'checkanswer', 'count' => $count, 'size' => 'normal', 'popup_data' => $mikata_answer[$value]['answer'])); ?>
            <br>
            <?php $count++; ?>
        <?php endforeach; ?>
</div>