<h1><?php echo $post['Post']['title']; ?></h1>
<p><small><?php echo $post['Post']['created']; ?></small></p>
<p><?php echo $post['Post']['body'] ?></p>
<?php echo $this->Html->link('戻る',
array('action' => 'index')); ?>