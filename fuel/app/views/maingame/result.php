<style>
    div#container{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_b_2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    div#title{
        position: absolute;
        left: 25%;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/title_1.png");
        background-repeat: no-repeat;
        width: 470px;
        height: 60px;
    }
    div#top{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_b_5.png");
        background-size: cover;
        margin-top: 0px;
        height: 36%;
    }
    div#bottom{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_b_6.png");
        background-repeat: no-repeat;
        background-size: cover;
        margin-left: 27px;
        height: 321px;
        width: 904px;
    }
    div#inbox{
        padding-top: 6px;
        padding-left: 20px;
        padding-right: 20px;
        height: 192px;
        overflow: auto;
    }
    div#bar{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/black_1.png");
        color: white;
        margin-top: 15px;
        margin-bottom: 10px;
        font-size: 16pt;
        font-weight: 700;
        padding-top: 5px;
        height: 35px;
    }
    img#BB{
        width: 13%;
    }
    img#next{
        margin-left: 13%;
        width: 24%;
    }
    img#end{
        margin-left: 26%;
        width: 24%;
    }
    h1{
        color: white;
        padding-top: 7px;
        margin-top: 0px;
    }
    p{
        color: white;
        margin-top: 2.2%;
        padding-top: 4%;
        padding-left: 12%;
        padding-right: 11%;
        font-size: 20pt;
    }
</style>
<?php
    $thatArray = $game['table']['thatCardArray'];
    unset($thatArray[$game['table']["status"]["currentPlayerName"]]);
    shuffle($thatArray);
    $img = asset::img('Black_Box.png',array('id'=>'BB'));
    $row_theme = explode(',', $mikata_theme[$game['table']['status']['currentTheme']]['theme']);
    $theme_back = $row_theme[count($row_theme) - 1];
    $row_theme[count($row_theme) - 1] = $img;
    $row_theme[] = $theme_back;
    $theme = implode($row_theme);
?>
<div id="title">
    <h1>投票結果発表</h1>
</div>
<div id="top">
    <p><?= $theme; ?></p>
</div>
<div id="bottom">
    <div id="inbox">
        <?php foreach($_SESSION['game']['table']['thatCardArray'] as $key =>$value): ?>
        <?php if($key == 'cpu'){continue;} ?>
        <div id="bar">
        <?= $key .'   '?>
        <?= $value .'   '?>
        <?= $_SESSION['game']['table']['playerScoreArray'][$key] + $_SESSION['game']['table']['votesArray'][$value] ?>
        <?= '(+'.$_SESSION['game']['table']['votesArray'][$value].')' ?>
        </div>
        <?php endforeach; ?>
    </div>
    <a href='index'><?= Asset::img('next_1.png',array('id'=>'next','alt' => 'リトライ')) ?></a>
    <a href='./../title'><?= Asset::img('end_1.png',array('id' => 'end','alt' => 'タイトル')) ?></a>
</div>
