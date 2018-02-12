<div>
	この回答に投票しますか？
</div>

<div>
    <?= $popup_data ?>
</div>

<div>
    <?= Form::open(array('action' => 'maingame/entervote', 'method' => 'post'));?>
    <input type="hidden" name="vote" value="<?= $popup_data ?>" >
	<?= Form::input(array('type' => 'image','name' => 'submit', 'id' => 'form_ok', 'src' => 'http://esmile-sys.sakura.ne.jp/Mikata/yoshida/public/assets/img/ok_g_1.png')) ?>
    <?= Form::close(); ?>
</div>