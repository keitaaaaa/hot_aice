<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_gallery.png',
				array('width' => '270')); ?></h1>
</div>

<div id='big'>

	<h1>Movies</h1>
	<div id="movie">
			<p>
				<!-- 16:9 -->
				<iframe width="384" height="216" src="//www.youtube.com/embed/qDNxAefJ430?rel=0" frameborder="0" allowfullscreen></iframe>
			</p>
			<br>
	</div>
	<div id="movie">
			<p>
				<iframe width="384" height="216" src="//www.youtube.com/embed/IW4ya9gVRSA?rel=0" frameborder="0" allowfullscreen></iframe>
			</p>
	</div>
				<br>
</div>

<div id='big'>
	<h1>Photos</h1>
	<div id='photo'>
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />  
		<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>  
		<script src="js/lightbox.js" type="text/javascript"></script>

		<?php foreach($photos as $photo): ?>

		<a href="img/upload/<?php echo $photo['Photo']['file_name']; ?>" rel="lightbox">
		<img src="img/upload/<?php echo $photo['Photo']['file_name']; ?>" height="130"/></a>

		<?php endforeach; ?>
	</div>
</div>