<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_top.png',
				array('width' => '123')); ?></h1>
</div>
<div id='big'>
	<!-- <p>
		<?php echo $this->Html->image('image_top.png',
		array('width' => '800')); ?>
	</p> -->
		
	</div>
	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('image_top.png',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->image('cds.png',
			array('width' => '250','url' => array('controller' => 'musics','action' => 'index'))); ?>
		</div>
	</div>

	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('image_top.png',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->image('gallery.png',
			array('width' => '250','url' => array('controller' => 'galleries',
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
			<?php echo $this->Html->image('image_top.png',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->link('Tシャツ購入',
			array('controller' => 'orders', 'action' => 'add')); ?>
		</div>
	</div>
	
	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('image_top.png',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->link('フォトギャラリー',
			array('controller' => 'photos', 'action' => 'index')); ?>
		</div>
	</div>

	<div id='box'>
		<div id='box_img'>
			<?php echo $this->Html->image('image_top.png',
			array('width' => '250')); ?>
		</div>
		<div id='box_m'>
			<?php echo $this->Html->link('メンバー専用',
			array('controller' => 'users', 'action' => 'index')); ?>
		</div>
	</div>
	