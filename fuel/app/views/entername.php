<h1>プレイヤー名を順番に入力してください</h1>
<div>
<?= Form::open(array('action' => 'entername/setPlayerName', 'method' => 'post'));
	print_r(Model_tableinfo::$playerNumber);
	for ($n = 1; $n <= Model_tableinfo::$playerNumber; $n++)
	{
		print_r($n.'<input type="text"><br>');
	}
?>
</div>