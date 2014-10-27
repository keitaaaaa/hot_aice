<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_cds.png',
				array('width' => '120')); ?></h1>
</div>
<div id='big'>
	<div id="img">
		<?php echo $this->Html->image('odobull.png', array('width' => '250')); ?>
	</div>

	<div id="list">
		<h3>「オードブル」</h3>
		<p>
			2014/1/30 発売
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			>
			<?php echo $this->Html->link('試聴',
				array('action' => 'listen')); ?>
		</p>

		<p>
			1.the small world<br>
			2.ジョバンニ<br>
			3.I have...<br>
			4.夏の残像<br>
			5.ただいま、おかえり<br>
		</p>

	</div>

	

	<div id="img">
		<?php echo $this->Html->image('full_moon.jpg', array('width' => '250')); ?>
	</div>
	<div id="list">
		<h3>「フルムーン/ハローハロー」</h3>
			<p>2012/10/20 発売</p>	
		<p>
			1.フルムーン<br>
			2.ハローハロー<br>
		</p>
	</div>
</div>