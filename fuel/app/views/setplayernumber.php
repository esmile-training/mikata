<style type="text/css">
	div#container{
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_b_1.jpg");
		background-size: contain;
	}
        H1{
            color: white;
        }
        div#form{
            background-image: none;
            position: absolute;
            left: 39%;
        }
        input#form_submit{
            width: 210px;
            height: auto;
            margin-top: 250px;
        }
        select#name{
            top: auto;
        }
		div#ander{
			text-align: center;
		}
</style>
<h1>プレイ人数を決めてください。</h1>
<div id="">
	<a href='setplayernumber/getplayernumber/3'><?= Asset::img('3_off.png',array('id' =>'','alt' => '3')) ?></a>
	<a href='setplayernumber/getplayernumber/4'><?= Asset::img('4_off.png',array('id' =>'','alt' => '4')) ?></a>
	<a href='setplayernumber/getplayernumber/5'><?= Asset::img('5_off.png',array('id' =>'','alt' => '5')) ?></a>
	<a href='setplayernumber/getplayernumber/6'><?= Asset::img('6_off.png',array('id' =>'','alt' => '6')) ?></a>
</div>
<div id='ander'>
	<a href='setplayernumber/getplayernumber/7'><?= Asset::img('7_off.png',array('id' =>'','alt' => '7')) ?></a>
	<a href='setplayernumber/getplayernumber/8'><?= Asset::img('8_off.png',array('id' =>'','alt' => '8')) ?></a>
	<a href='setplayernumber/getplayernumber/9'><?= Asset::img('9_off.png',array('id' =>'','alt' => '9')) ?></a>
</div>