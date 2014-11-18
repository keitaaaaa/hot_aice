<h1>Menber's Page</h1>
<p><?php echo $this->Html->link('ブログ',
		array('controller' => 'Posts', 'action' => 'user_index'));
?></p>
<p><?php echo $this->Html->link('写真アップロード',
		array('controller' => 'Photos', 'action' => 'add'));
?></p>
<p><?php echo $this->Html->link('ログアウト',
		array('action' => 'logout'));
?></p>