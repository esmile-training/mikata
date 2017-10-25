<div>
    この回答でいいですか?
</div>

<div>
    <?= $popup_data ?>
</div>

<div>
    <?= Form::open(array('action' => 'maingame/enterAnswer', 'method' => 'post'));?>
    <input type="hidden" name="answer" value="<?= $popup_data ?>" >
    <?= Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
    <?= Form::close(); ?>
</div>