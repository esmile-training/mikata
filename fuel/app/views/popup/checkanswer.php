<div>
	この回答でよろしいですか?
</div>

<div>
    <?= $popup_data['word'] ?>
</div>

<div>
    <?= Form::open(array('action' => 'maingame/enterAnswer', 'method' => 'post'));?>
    <input type="hidden" name="answer" value="<?= $popup_data['word'] ?>" >
	<input type="hidden" name="id" value="<?= $popup_data['id'] ?>" >
    <?= Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
    <?= Form::close(); ?>
</div>
