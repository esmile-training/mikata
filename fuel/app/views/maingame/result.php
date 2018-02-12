<h1>投票結果発表</h1>
<?= $mikata_theme[$game['table']['status']['currentTheme']]['theme']; ?>
<br>
<br>
<?php foreach($_SESSION['game']['table']['thatCardArray'] as $key =>$value): ?>
<?php if($key == 'cpu'){continue;} ?>
<?= $key .'   '?>
<?= $value .'   '?>
<?= $_SESSION['game']['table']['playerScoreArray'][$key] + $_SESSION['game']['table']['votesArray'][$value] ?>
<?= '(+'.$_SESSION['game']['table']['votesArray'][$value].')' ?>
<br>
<?php endforeach; ?>

<a href='./../title'><?= Asset::img('end_1.png',array('alt' => 'タイトル')) ?></a>
<a href='index'><?= Asset::img('next_1.png',array('alt' => 'リトライ')) ?></a>
