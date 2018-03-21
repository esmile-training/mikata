<style type="text/css">
    div#container{
        color: #FFF !important;
        background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_metal.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
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
        height: 30%;
        width: 50%;
    }
    div[id^="modal-checkanswer"]{
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
        margin-top: 3%;
        margin-left: 25%;
        padding-top: 2.5%;
        text-align: center;
        color: white;
    }
    div#modal-ok{
        position: relative;
        left: 13%;
        bottom: 3%;
        height: 0;
    }
    div#modal-close{
       position: relative;
       left: 50%;
       bottom: 3%;
    }
    input#modal-ok{
        width: 35%;
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
        padding: 3px;
        width: 100%;
        height: 100%;
        font-size: 18pt;
    }
</style>
<?php
    $img = asset::img('Black_Box.png');
    $row_theme = explode(',', $mikata_theme[$game['table']['status']['currentTheme']]['theme']);
    $theme_back = $row_theme[count($row_theme) - 1];
    $row_theme[count($row_theme) - 1] = $img;
    $row_theme[] = $theme_back;
    $theme = implode($row_theme);
    $count = 1;
?>
<div id="top">
    <p><?= $theme; ?></p>
</div>
<div id="bottom">
    <div id="inbox">
    <?php foreach($game['hand'][$game['table']['status']['currentPlayerName']] as $value): 
           if($count%2==1){$style = 'style="float: left;"';}
    ?>
        <div id="button" <?= $style ?>>
        <a class="modal_btn checkanswer<?= $count ?>">
            <?= $mikata_answer[$value]['answer'] ?>
        </a>
    </div>
        <?= View::forge('popup/wraps', array('name' => 'checkanswer', 'count' => $count, 'size' => 'normal', 'popup_data' => array('theme' => $mikata_theme[$game['table']['status']['currentTheme']]['theme'],'word' => $mikata_answer[$value]['answer'], 'id' => $value))); ?>
    
    <?php $count++; ?>
    <?php endforeach; ?>
    </div>
</div>
