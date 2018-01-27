<div id="modal-theme">
	<br>
	<?='　　'?>この回答でよろしいですか?
    <br><br>
    <?= '　　'.$popup_data['theme'] ?>
</div>

<div id="modal-answer">
    <text id="modal-answer"><?= $popup_data['word'] ?></text>
</div>

<div id="modal-ok">
    //<?= Form::open(array('action' => 'maingame/enterAnswer', 'method' => 'post'));?>
    <input type="hidden" name="answer" value="<?= $popup_data['word'] ?>" >
    <input type="hidden" name="id" value="<?= $popup_data['id'] ?>" >
    <?= Form::input(array('type' => 'image','name' => 'submit', 'src' => 'http://esmile-sys.sakura.ne.jp/Mikata/yoshida/public/assets/img/ok_g_1.png')) ?>
    <?= Form::close(); ?>
</div>
