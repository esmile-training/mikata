<style type="text/css">
    div#container{
        color: #FFF !important;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_metal.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    div#top{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_b_2.png");
        background-repeat: no-repeat;
        background-size: 98% auto;
        margin-left: 1.5%;
        height: 258px;
        width: auto;
    }
    div#bottom{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_b_1.png");
        background-repeat: no-repeat;
        background-size: contain;
        margin-top: 6px;;
        margin-left: 1.5%;
        padding-top: 6px;
        height: 50%;
    }
    div#inbox{
        overflow: auto;
        margin-left: 10px;
        padding: 10px;
        height: 86%;
    }
    div#button{
        position: relative;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_answer_b_1.png");
        background-repeat: no-repeat;
        background-size: contain;
        margin-bottom: 10px;
        height: 22%;
        width: 33%;
        float: left;
    }
    div[id^="modal-checkvote"]{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_l.png");
        background-color: rgba(0,0,0,0);
        background-size: 100%;
    }
    div#modal-theme{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_b_3.png");
        background-repeat: no-repeat;
        background-size: 100%;
        margin-top: 3%;
        margin-left: 9.5%;
        padding-left: 3px;
        width: 560px;
        height: 154px;
        color: white;
    }
    div#modal-answer{
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/box_answer_b_1.png");
        background-repeat: no-repeat;
        background-size: 100%;
        width: 50%;
        height: 13%;
        margin-top: 1%;
        margin-left: 25%;
        padding-top: 2.5%;
        text-align: center;
        color: white;
    }
    div#modal-ok{
        position: relative;
        left: 13%;
        bottom: 3%;
        height: 0%;
        width: 3%;
    }
    div#modal-close{
       position: relative;
       left: 50%;
       bottom: 3%;
    }
    input#modal-ok{
        width: 240px;
    }
    img#modal-close{
        width: 35%;
    }
    p{
        margin-top: 0;
        margin-bottom: 0;
        padding-top: 70px;
        padding-left: 120px;
        padding-right: 120px;
        color:#FFF;
        font-family: "Yu Gothic";
        font-weight: 600;
        font-size: 26pt;
        line-height: 120%;
    }
    a.modal_btn{
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        font-size: 16pt;
    }
</style>
<?php
    $thatArray = $game['table']['thatCardArray'];
    unset($thatArray[$game['table']["status"]["currentPlayerName"]]);
    shuffle($thatArray);
    $img = asset::img('Black_Box.png');
    $row_theme = explode(',', $mikata_theme[$game['table']['status']['currentTheme']]['theme']);
    $theme_back = $row_theme[count($row_theme) - 1];
    $row_theme[count($row_theme) - 1] = $img;
    $row_theme[] = $theme_back;
    $theme = implode($row_theme);
    $count = 0;
?>
<div id="top">
    <p><?= $theme; ?></p>
</div>
<div id="bottom">
    <div id="inbox">
<?php foreach($thatArray as $value): ?>
    <div id="button">
        <a class="modal_btn checkvote<?= $count ?>">
        <?= $word = $value ?>
        </a>
    </div>
    <?= View::forge('popup/wraps', array('name' => 'checkvote', 'count' => $count, 'size' => 'normal', 'popup_data' => array('theme' => $mikata_theme[$game['table']['status']['currentTheme']]['theme'],'word' => $word))); ?>
    <?php $count++; ?>
<?php endforeach; ?>
    </div>
</div>
