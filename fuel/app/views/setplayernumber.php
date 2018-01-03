<style type="text/css">
	div{
		background-image: url("http://esmile-sys.sakura.ne.jp/Mikata/img/bg_b_1.jpg");
		background-size: contain;
	}
        H1{
            color: white;
        }
</style>
<h1>プレイ人数を決めてください。</h1>
<div style="background-image: none">
    <?= Form::open(array('action' => 'setplayernumber/getPlayerNumber', 'method' => 'post'));?>
        <select name= player>
        <option value= 3>3人</option>
        <option value= 4>4人</option>
        <option value= 5>5人</option>
        <option value= 6>6人</option>
        <option value= 7>7人</option>
        <option value= 8>8人</option>
        <option value= 9>9人</option>
        </select>
    <?= Form::input(array('type' => 'image','name' => 'submit', 'src' => 'http://esmile-sys.sakura.ne.jp/Mikata/yoshida/public/assets/img/ok_b_1.png')) ?>
    <?= Form::close(); ?>
</div>