<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_top.png',
				array('width' => '123')); ?></h1>
</div>
<div id='big3'>		
	</div>
	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('top2.jpg',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->image('cds.png',
			array('width' => '250','url' => array('controller' => 'musics','action' => 'index'))); ?>
		</div>
	</div>

	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('top4.png',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->image('gallery.png',
			array('width' => '250','url' => array('controller' => 'photos',
					'action' => 'index'))); ?>
		</div>
	</div>
	
	<div id='box'>
		<div id='box_img'>
				<?php echo $this->Html->image('image_top.png',
				array('width' => '250')); ?>
			</div>
			<div id='box_m'>
				<?php echo $this->Html->image('blog.png',
				array('width' => '250','url' => array('controller' => 'posts',
					'action' => 'index'))); ?>
			</div>
	</div>
	
	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('top5.jpg',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->image('goods.png',
				array('width' => '250','url' => array('controller' => 'orders',
					'action' => 'add'))); ?>
		</div>
	</div>

	