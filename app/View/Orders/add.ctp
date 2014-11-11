<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>

<h1>Tシャツ 購入ページ</h1>
<br>
<div id='T_img'>
	<?php echo $this->Html->image('T1.jpg', array('width' => '300', 'height' => '350')); ?>
	<p>Black 2500円</p>
</div>
<div id='T_img'>
	<?php echo $this->Html->image('T2.jpg', array('width' => '300', 'height' => '350')); ?>
	<p>White 2500円</p>
</div>

<?php
	echo $this->Form->create('Order');
	echo $this->Form->radio('color', array('black' => 'black', 'white' => 'white'), array('legend' => '色を選択'));
	echo $this->Form->radio('size', array('S' => 'S', 'M' => 'M', 'L' => 'L'), array('legend' => 'サイズを選択'));
	echo $this->Form->input('volume');
	echo $this->Form->input('customer');
	echo $this->Form->input('adress');
	echo $this->Form->input('mail');
	echo $this->Form->end('次へ');
?>
