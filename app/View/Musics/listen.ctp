<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_cds.png',
		array('width' => '120')); ?></h1>
</div>
<div id='big'>
	<p>
		<iframe src="http://widgets.itunes.apple.com/widget.html?c=jp&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=music&e=album&w=325&h=300&ids=811240024&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:325px;height: 300px;border:0px"></iframe>
	</p>
</div>
<?php echo $this->Html->link('戻る',
	array('action' => 'index')); ?>