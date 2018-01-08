<div id="modal-<?= $name ?><?= $count ?>" class="modal-content-<?= $size ?>">
	<?php //引き渡しデータがある場合 ?>
	<?php $name = explode(" ",$name)[0]; ?>
	<?php if(isset($popup_data)){ ?>
		<?= View::forge('popup/'.$name, array('popup_data'=>$popup_data)) ?>
	<?php //引き渡しデータがない場合 ?>
	<?php }else{ ?>
		<?= View::forge('popup/'.$name) ?>
	<?php } ?>
	<?php //ポップアップウィンドウを閉じる ?>
    <div id="modal-close">
        <?= Asset::img('no_1.png',array('id' => 'modal-close', 'src' => '閉じる')) ?>
    </div>
</div>