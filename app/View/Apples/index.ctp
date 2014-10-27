<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_top.png',
				array('width' => '320')); ?></h1>
</div>
<p><?php echo $this->Html->link('Top',
			array('controller' => 'apples', 'action' => 'index')); ?></p>
			<p><?php echo $this->Html->link('ブログ',
			array('controller' => 'posts', 'action' => 'index')); ?></p>
			<p><?php echo $this->Html->link('ディスコグラフィー',
			array('controller' => 'musics', 'action' => 'index')); ?></p>
			<p><?php echo $this->Html->link('ギャラリー',
			array('controller' => 'galleries', 'action' => 'index')); ?></p>
			<p><?php echo $this->Html->link('ライブ',
			array('controller' => '', 'action' => '')); ?></p>