<h1>確認ページ</h1>
色は
<?php echo $this->request->data['Order']['color']; ?>
<br>
サイズは
<?php echo $this->request->data['Order']['size']; ?>
<br>
数量は
<?php echo $this->request->data['Order']['volume']; ?>
<br>
名前は
<?php echo $this->request->data['Order']['customer']; ?>
<br>
住所は
<?php echo $this->request->data['Order']['adress']; ?>
<br>
メールアドレスは
<?php echo $this->request->data['Order']['mail']; ?>
<br>
<?php debug($order); ?>
<?php
	echo $this->Form->create('Order', array('action' => 'save'));
	echo $this->Form->hidden('color');
	echo $this->Form->hidden('size');
	echo $this->Form->hidden('volume');
	echo $this->Form->hidden('customer');
	echo $this->Form->hidden('adress');
	echo $this->Form->hidden('mail');
	echo $this->Form->end('注文完了');
?>