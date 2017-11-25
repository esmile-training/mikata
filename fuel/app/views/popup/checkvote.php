<div>
	この回答に投票しますか？
</div>

<div>
    <?= $game['table']['status']['thatCardArray'][$popup_data] //これだとCSVを読み込んでいないから動かない?>
</div>

<div>
    <?= Form::open(array('action' => 'maingame/entervote', 'method' => 'post'));?>
    <input type="hidden" name="vote" value="<?= $popup_data ?>" >
    <?= Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
    <?= Form::close(); ?>
</div>