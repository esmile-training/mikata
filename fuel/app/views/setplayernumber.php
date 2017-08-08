<h1>人数を選択してください。</h1>

<div>
	<?= Form::open(array('action' => 'setplayernumber/getPlayerNumber', 'method' => 'post'));?>
		<select name= player>
		<option value= 3>3人</option>
		<option value= 4>4人</option>
		<option value= 5>5人</option>
		<option value= 6>6人</option>
		<option value= 7>7人</option>
		<option value= 8>8人</option>
		<option value= 9>9人</option>
		</select>
	<?= Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
	<?= Form::close(); ?>
</div>