<div>
	<marquee>Hello World!</marquee>
</div>

<script language="javascript">
<!--

new Image().src = "img/HP_Triangle_TR12pxc008080.gif";
op="img/HP_Triangle_TR12pxc008080.gif";
cl="img/HP_Triangle_TD12pxc008080.gif";
function dd(obj){

if(document.getElementById)
{document.getElementById(obj)
.style.display=='none'?document.getElementById(obj)
.style.display='':document.getElementById(obj)
.style.display='none';
document.getElementById(obj+"i").src.indexOf('TD12pxc008080')>0?
document.getElementById(obj+"i").src=op:
document.getElementById(obj+"i").src=cl 

} else if(document.all){
document.all(obj).style.display=='none'?
document.all(obj).style.display='':document.all(obj).style.display='none';
document.all(obj+"i").src.indexOf('TD12pxc008080')>0?
document.all(obj+"i").src=op:document.all(obj+"i").src=cl

} else if(document.layers){
document.layers[obj].display=='none'?
document.layers[obj].display='':document.layers[obj].display='none';
document.layers[obj+"i"].src.indexOf('TD12pxc008080')>0?
document.layers[obj+"i"].src=op:document.layers[obj+"i"].src=cl
}
}

//-->
</script>

<div id="折りたたみB">
<a href="javascript:dd('折りたたみ指示B')"><img src="img.gif" id="折りたたみ指示Bi" style="border-width : 0px;" alt="右">　ランキング</a>
<div style="display:none;margin-left:18pt" id="折りたたみ指示B">１位<br>
２位<br>
３位<br>
</div>
</div>

<div>
	<p><a class="modal_btn def">クリックするとdefモーダルウィンドウを開きます。</a></p>
</div>

<?= View::forge('popup/wrap', array('name' => 'def', 'size' => 'big')); ?>

<?= Form::open(array('action' => 'testpage/picthatcard', 'method' => 'post'));?>
<?= Form::button(null, '一枚引く', array('type' => 'submit', 'style' => 'padding: 2px;')); ?>
<?= Form::close(); ?>

<?= game['hand'] ?>