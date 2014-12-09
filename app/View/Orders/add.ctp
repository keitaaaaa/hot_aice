<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_goods.png',
				array('width' => '230')); ?></h1>
</div>
<br>
<div id='T_img'>

	<?php echo $this->Html->image('T1.jpg', array('width' => '95%')); ?>
	<p>
		Tシャツ ¥2500
	</p>
</div>

<div id='form'>
<?php echo $this->Form->create('Order'); ?>
<?php
	echo $this->Form->input('color', 
		array('label' => 'カラー', 'options' => array('Black' => 'Black', 'White' => 'White')));

	echo $this->Form->input('size',
		array('label' => 'サイズ', 'options' =>
			array('Sサイズ' => 'Sサイズ',
				'Mサイズ' => 'Mサイズ',
				'Lサイズ' => 'Lサイズ')));

	echo $this->Form->input('volume',
		array('label' => '枚数', 'options' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5)));
?>
</div>

<div id='form'>
<?php
	echo $this->Form->input('customer', array('label' => '氏名'));
	
	echo $this->Form->input('adress',
		array('label' => '住所', 'rows' => '1'));
	
	echo $this->Form->input('mail',
		array('label' => 'メールアドレス', 'rows' => '1', 'type' => 'email'));
?>
<br>

<div class='tugie'>
<?php
	echo $this->Form->end('次へ');
?>
</div>
</div>