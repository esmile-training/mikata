<?php
    $img = asset::img('Black_Box.png',array('id' =>'BlackBox','alt' => 'BB'));
    $row_theme = explode(',', $popup_data['theme']);
    $theme_back = $row_theme[count($row_theme) - 1];
    $row_theme[count($row_theme) - 1] = $img;
    $row_theme[] = $theme_back;
    $theme = implode($row_theme);
?>
<div id="modal-theme">
    <p id="modal"><?=$theme ?></p>
</div>

<div id="modal-answer">
    <text id="modal-answer"><?= $popup_data['word'] ?></text>
</div>

<div id="modal-ok">
    <?= Form::open(array('action' => 'maingame/entervote', 'method' => 'post'));?>
    <input type="hidden" name="vote" value="<?= $popup_data['word'] ?>" >
	<?= Form::input(array('type' => 'image','name' => 'submit', 'id' => 'modal-ok', 'src' => 'http://esmile-sys.sakura.ne.jp/Mikata/yoshida/public/assets/img/ok_g_1.png')) ?>
    <?= Form::close(); ?>
</div>