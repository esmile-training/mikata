<style type="text/css">
    div#container{
        color: #FFF !important;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_metal.jpg");
        background-size: contain;
    }
    div#top{
        color: #FFF !important;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_g_2.png");
        background-repeat: no-repeat;
        background-size: contain;
        margin-left: 5px;
        width: 100%;
        height: 37%;
    }
    div#bottom{
        color: #FFF !important;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_g_1.png");
        background-repeat: no-repeat;
        background-size: contain;
        margin-left: 9px;
        height: 63%;
    }
    p{
        margin-top: 0;
        margin-bottom: 0;
        padding-top: 25px;
        padding-left: 100px;
        color:#FFF;
        font-family: "Yu Gothic";
        font-weight: 700;
        font-size: 36pt;
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
<div id="top">
<p>
<?= $_SESSION['game']['table']['playerArray'][$player] ?>
さんの番です
<br>
<?= Form::open(array('action' => 'maingame/'.$url, 'method' => 'post')); ?>
<?=	Form::button(null, '決定', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
<?=	Form::close(); ?>
</p>
</div>
<div id="bottom">
    <p>あああああ</p>
</div>
<?= '<pre>' ?>
<?= var_dump($_SESSION['game']['table']) ?>
<!--<?= var_dump($_SESSION['game']['hand']) ?>-->
<?= '</pre>' ?>
