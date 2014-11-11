<h1>Photos upload</h1>

<?php
	echo $this->Form->create('Photo', array('type'=>'file'));
	echo $this->Form->input('Photo.image', array('label' => false, 'type' => 'file', 'multiple'));
	echo $this->Form->submit('登録する', array('name' => 'submit'));
	echo $this->Form->end();
?>