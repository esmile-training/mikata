$(function(){
var target = '';
//複数宣言用に追加
var id = '';
	$(".modal_btn").click(
		function(){
			target = $(this).get(0).className.split(" ")[1];
			target = $("#modal-" + target);
			//3つ目の引数としてidを追加
			if($(this).get(0).className.split(" ")[2]) id = $(this).get(0).className.split(" ")[2];
			
			// キーボード操作などにより、オーバーレイが多重起動するのを防止する
			$(this).blur() ;	//ボタンからフォーカスを外す
			//新しくモーダルウィンドウを起動しない
			if($("#modal-overlay"+id)[0]) return false ;

			// オーバーレイ用のHTMLコードを、[container]内の最後に生成する
			$("#container").append('<div id="modal-overlay'+id+'></div>') ;
			$("#modal-overlay"+id).fadeIn("slow") ;

			// コンテンツをフェードインする
			$(target).fadeIn( "slow" ) ;
		}
	);
	//[#modal-close]をクリックしたら…
	$("#modal-overlay"+id+",#modal-close").unbind().click( function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$(target,"#modal-overlay"+id).fadeOut("slow" , function(){
			//[#modal-overlay]を削除する
			$('#modal-overlay'+id).remove();
		});
	});
});