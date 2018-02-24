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
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/name_bar");
		position: absolute;
		width: 88%;
		height: 17%;
		top: 150px;
		left: 68px;
	}
	input#name_area{
		position: absolute;
		top: 7%;
		left: 6%;
		border: none;
		border-radius: 10px;
		background-size: cover;
		background-repeat: no-repeat;
		background-color: rgba(255,255,255,0);
		font-size: 50px;
		color: white;
		width: 750px;
		height: 78px;
	}
	text#form{
		color: white;
	}
	div#form_submit{
		position: absolute;
		left: 34%;
		bottom: 10%;
	}
	input#form_submit{
		width: 292px;
		height: 146px;
		border: none;
		background-color: rgba(0,0,0,0);
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/ok_y_1.png");
	}
	select#name{
		top: auto;
	}
</style>
<h1>プレイヤー名を入力して次の人に渡してください</h1>
<div id="form">
    <?= Form::open(array('action' => 'entername/setPlayerName', 'method' => 'post'));
		print_r('<input type="text" id="name_area" name="player_name"><br>');
	?>
</div>
<div id="form_submit">
    <?= Form::input(array('type' => 'submit','name' => 'submit')); ?>
</div>
<?= Form::close(); ?>
