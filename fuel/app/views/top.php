<?php //検索フォーム ?>
<?= Form::open(array('action' => 'top/login', 'method' => 'post')); ?>
	<table>
		<tr>
			<td>プレイヤー名</td>
			<td>
				<?= Form::input('name',  '', array(	'style' => 'padding:3px;' )); ?>
			</td>
		</tr>
		<tr>
			<td>パスワード</td>
			<td>
				<?= Form::input('password', '', array( 'type'=>'password', 'style' => 'padding:3px;')); ?>
			</td>
		</tr>
	</table>
	<div>
		<?= Form::button(null, 'ログイン', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
	</div>
<?=  Form::close(); ?>

<?php if($error_msg): ?>
	<div>
		<?= $error_msg ?>
	</div>
<?php endif; ?>


