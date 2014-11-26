<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_goods.png',
				array('width' => '230')); ?></h1>
</div>
カラー：
<?php echo $this->request->data['Order']['color']; ?>
<br>
サイズ：
<?php echo $this->request->data['Order']['size']; ?>
<br>
数量：
<?php echo $this->request->data['Order']['volume']; ?>
<br>
名前：
<?php echo $this->request->data['Order']['customer']; ?>
<br>
住所：
<?php echo $this->request->data['Order']['adress']; ?>
<br>
メールアドレス：
<?php echo $this->request->data['Order']['mail']; ?>
<br>
<?php
	echo $this->Form->create('Order', array('action' => 'save'));
	echo $this->Form->hidden('color');
	echo $this->Form->hidden('size');
	echo $this->Form->hidden('volume');
	echo $this->Form->hidden('customer');
	echo $this->Form->hidden('adress');
	echo $this->Form->hidden('mail');
?>
<br>
以上でよろしいですか？
<br>
<?php echo $this->Form->end('注文完了'); ?>