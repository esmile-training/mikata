<h1>プレイヤー名を順番に入力してください</h1>
<div>
<?= Form::open(array('action' => 'entername/setPlayerName', 'method' => 'post'));
	for ($n = 1; $n <= Model_tableinfo::$playerNumber; $n++)
	{
		print_r('プレイヤー'.$n.' <input type="text"><br>');
	}
	Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;'));
	Form::close(); ?>
</div>