<h1>新しい記事</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save post');
?>
<?php echo $this->Html->link('戻る',
array('action' => 'index')); ?>