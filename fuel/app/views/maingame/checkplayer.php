<?= $game = $_SESSION['game']['table'];

$game['table']['playerArray'][$game['table']['status']['currentPlayer']] ?>
さんの番です。
<br>
<?= Form::open(array('action' => 'maingame/selectanswer', 'method' => 'post')); ?>
<?=	Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
<?=	Form::close(); ?>
