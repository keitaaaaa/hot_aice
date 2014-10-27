<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_gallery.png',
				array('width' => '270')); ?></h1>
</div>
<div id='big'>
<div id="movie">
	<h3>ペダル</h3>
		<p>
			<iframe width="480" height="270" src="//www.youtube.com/embed/qDNxAefJ430?rel=0" frameborder="0" allowfullscreen></iframe>
		</p>
		<br>
</div>
<div id="movie">
	<h3>最後に見た景色はビルの上から</h3>
		<p>
			<iframe width="480" height="270" src="//www.youtube.com/embed/IW4ya9gVRSA?rel=0" frameborder="0" allowfullscreen></iframe>
		</p>
</div>
			<br>
	<!-- <h2>Photos</h2>
	<?php foreach ($galleries as $gallery): ?>
		<?php echo $this->Html->image($gallery['Gallery']['path']); ?>
<?php endforeach; ?> -->

</div>