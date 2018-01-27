<style type="text/css">
	div{
		color: #FFF !important;
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_metal.jpg");
		background-size: contain;
	}
</style>

<?php 
if($_SESSION['game']['table']['status']['currentPlayer'] >= 20)
    {
		$url = 'selectvote';
    } else {
		$url = 'selectanswer';
    }
$player = $_SESSION['game']['table']['status']['currentPlayer'] % 10;
$_SESSION['game']['table']['status']['currentPlayerName'] = $_SESSION['game']['table']['playerArray'][$player];
?>
<p>
<?= $_SESSION['game']['table']['playerArray'][$player] ?>
さんの番です。
<br>
<?= Form::open(array('action' => 'maingame/'.$url, 'method' => 'post')); ?>
<?=	Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
<?=	Form::close(); ?>
</p>
<?= '<pre>' ?>
<?= var_dump($_SESSION['game']['table']) ?>
<!--<?= var_dump($_SESSION['game']['hand']) ?>-->
<?= '</pre>' ?>
