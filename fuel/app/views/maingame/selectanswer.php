<style type="text/css">
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
    }
    div#modal-close{
       position: relative;
       left: 50%;
       bottom: 36%;
    }
    input#modal-ok{
        width: 35%;
    }
    
    img#modal-close{
        width: 35%;
    }
</style>

<div>
    <?php $count = 1; ?>
    <?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
    <br>
    <?php foreach($game['hand'][$game['table']['status']['currentPlayerName']] as $value): ?>
    <a class="modal_btn checkanswer<?= $count ?>">
        <?= $mikata_answer[$value]['answer'] ?>
    </a>
    <?= View::forge('popup/wraps', array('name' => 'checkanswer', 'count' => $count, 'size' => 'normal', 'popup_data' => array('theme' => $mikata_theme[$game['table']['status']['currentTheme']]['theme'],'word' => $mikata_answer[$value]['answer'], 'id' => $value))); ?>
    <br>
    <?php $count++; ?>
    <?php endforeach; ?>
</div>
