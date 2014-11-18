<h1><?php echo $post['Post']['title']; ?></h1>
<p>
	<small>
		<?php echo $post['Post']['created']; ?>
	</small>
</p>
<p>
	<?php echo $post['Post']['body'] ?>
</p>


<table>
	<td>
		<?php echo $this->Html->link('編集',
			array('action' => 'edit', $post['Post']['id'])); ?>
	</td>

	<td>
		<?php echo $this->Form->postlink('削除',
			array('action' => 'delete', $post['Post']['id']),
			array('confirm' => '削除してよろしいですか？')); ?>
	</td>
	
</table>
<p>
	<?php echo $this->Html->link('戻る',
		array('action' => 'user_index')); ?>
</p>