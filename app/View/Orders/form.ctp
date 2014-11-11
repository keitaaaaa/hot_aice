<h2>お問い合せフォーム</h2>
<?php echo $this->Form->create('Order'); ?>
<?php
	echo $this->Xformjp->radio('color', array('black' => 'black', 'white' => 'white'), array('legend' => '色を選択'));
	echo $this->Xformjp->radio('size', array('S' => 'S', 'M' => 'M', 'L' => 'L'), array('legend' => 'サイズを選択'));
	echo $this->Xformjp->input('volume');
	echo $this->Xformjp->input('customer');
	echo $this->Xformjp->input('adress');
	echo $this->Xformjp->input('mail');
?>

<?php
	if ($this->params['xformHelperConfirmFlag']) {
		echo $this->Formhidden->hiddenVars();
		echo $this->Xformjp->submit('修正する', array('name' => 'back', 'div' => false));
		echo $this->Xformjp->submit('送信する', array('name' => 'submit', 'div' => false));
	}
	else {
		echo $this->Xformjp->submit('入力内容を確認する', array('name' => 'confirm'));
	}
?>
<?php echo $this->Form->end(); ?>