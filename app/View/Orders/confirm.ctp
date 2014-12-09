<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
	<h1><?php echo $this->Html->image('title_goods.png',
				array('width' => '230')); ?></h1>
</div>

<div id='confirm'>
	<table>
		<tr>
			<th>商品名</th>
			<td>HOT AICE Tシャツ</td>
		</tr>
		<tr>
			<th>カラー</th>
			<td><?php echo $this->request->data['Order']['color']; ?></td>
		</tr>
		<tr>
			<th>サイズ</th>
			<td><?php echo $this->request->data['Order']['size']; ?></td>
		</tr>
		<tr>
			<th>数量</th>
			<td><?php echo $this->request->data['Order']['volume']; ?></td>
		</tr>
		<tr>
			<th>氏名</th>
			<td><?php echo $this->request->data['Order']['customer']; ?></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><?php echo $this->request->data['Order']['adress']; ?></td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td><?php echo $this->request->data['Order']['mail']; ?></td>
		</tr>
	</table>
</div>



<br>
<?php
	echo $this->Form->create('Order', array('action' => 'save'));
	echo $this->Form->hidden('color');
	echo $this->Form->hidden('size');
	echo $this->Form->hidden('volume');
	echo $this->Form->hidden('customer');
	echo $this->Form->hidden('adress');
	echo $this->Form->hidden('mail');
?>
<br>
以上でよろしいですか？
<br>
<?php echo $this->Form->end('注文完了'); ?>