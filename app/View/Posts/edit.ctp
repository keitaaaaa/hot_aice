<h1>Edit Post</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->index('title');
	echo $this->Form->index('body', array('rows' => '3'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save Post');
?>