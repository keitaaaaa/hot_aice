<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>


<h1>Photos upload</h1>




<?php echo $this->Form->create('Photo', array('action' => 'add', 'type' => 'file')); ?>
<?php echo $this->Form->input('file', array('type' => 'file')); ?>
<?php echo $this->Form->submit('アップロード'); ?>
<?php echo $this->Form->end() ?>



<div id='big'>
	<h1>Photos</h1>
	<div id='photo'>
		<link rel="stylesheet" href="/hot_aice/css/lightbox.css" type="text/css" media="screen" />  
		<script src="/hot_aice/js/jquery-1.11.0.min.js" type="text/javascript"></script>  
		<script src="/hot_aice/js/lightbox.js" type="text/javascript"></script>

		<?php foreach($photos as $photo): ?>

		<a href="/hot_aice/img/upload/<?php echo $photo['Photo']['file_name']; ?>" rel="lightbox">
		<img src="/hot_aice/img/upload/<?php echo $photo['Photo']['file_name']; ?>" height="130"/></a>

		<?php endforeach; ?>
	</div>
</div>