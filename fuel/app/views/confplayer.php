<div>
	<?= $mikata_answer['answer'][0] ?>
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