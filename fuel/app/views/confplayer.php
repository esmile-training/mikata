<div>
<?php foreach($game['hand']['chino'] as $value)
	{
		echo $mikata_answer[$value]['answer'];
	}
?>
</div>

<div>
	<table>
		<?php foreach ($mikata_answer as $answer): ?>
			<tr>
				<td>
					<?= $answer['id'] ?>
				</td>
				<td>
					<?= $answer['answer'] ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>