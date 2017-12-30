<style type="text/css">
	div#container{
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_title.jpg");
		background-size: contain;
	}
        div#logo{
            position: absolute;
            left: 7%;
        }
        img#logo{
            max-width: 800px;
            height: auto;
        }
        div#start_btn{
            position: absolute;
            top: 68.5%;
            left: 27.5%;
            background-image: none;
        }
        img#start_btn{
            max-height: 108px;
            width: auto;
        }
</style>
<div id="logo">
    <?= asset::img('logo.png', array('id'=>'logo', 'alt' => 'logo')) ?>
</div>
<div id="start_btn">
    <a href='setplayernumber'><?= Asset::img('start_1.png',array('id' =>'start_btn','alt' => 'スタート')) ?></a>
</div>