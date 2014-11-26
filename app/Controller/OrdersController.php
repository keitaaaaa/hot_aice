<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class OrdersController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function add() {
		if($this->request->is('post')) {
			$this->set('order', $this->request->data);
			$this->render('confirm');
		}
	}

	public function confirm() {
	}

	public function save() {
		if($this->request->is('post')) {

		$this->Order->create();
			if($this->Order->save($this->request->data)) {
				return $this->redirect(array('action' => 'finish'));
			}
			return $this->redirect(array('action' => 'add'));
		}
	}

	public function finish() {
		$new = $this->Order->find('first');//newに最新のorderを格納
		$email = new CakeEmail('gmail');
		$arrVal = array(
			'customer' => $new['Order']['customer'],
			'color' => $new['Order']['color'],
			'size' => $new['Order']['size'],
			'adress' => $new['Order']['adress'],
			'volume' => $new['Order']['volume']);
		$email->from(array('wkeitaorange@gmail.com' => 'Sender'));
		$email->bcc($new['Order']['mail']);
		$email->cc('wkeitaorange@gmail.com');
		$email->subject('HOT AICE Tシャツ注文の件');
		$email->send('メール本文');
	}
}
