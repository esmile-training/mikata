<style type="text/css">
	div#container{
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_y.jpg");
		background-size: contain;
	}
        H1{
            color: white;
        }
        div.input{
            color: white;
        }
        div#form{
            background-image: none;
            position: absolute;
            left: 39%;
        }
        text#form{
            color: white;
        }
        input#form_submit{
            width: 210px;
            height: auto;
            margin-top: 79%;
        }
        select#name{
            top: auto;
        }
</style>
<h1>プレイヤー名を順番に入力してください</h1>
<div id="form">
	<?= Form::open(array('action' => 'entername/setPlayerName', 'method' => 'post'));
		for ($n = 1; $n <= Model_tableinfo::$playerNumber; $n++)
		{
			print_r('<text id="form">プレイヤー'.$n.' </text>');
                        print_r('<input type="text" name='.$n.'><br>');
		} ?>
    <?= Form::input(array('type' => 'image','name' => 'submit', 'src' => 'http://esmile-sys.sakura.ne.jp/Mikata/yoshida/public/assets/img/ok_y_1.png')); ?>
	<?=	Form::close(); ?>
</div>