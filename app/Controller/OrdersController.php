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
				$email = new CakeEmail('gmail');
				$arrVal = $this->request->data;
				$email->from(array('wkeitaorange@gmail.com' => 'HOT AICE.com'));
				$email->cc('wkeitaorange@gmail.com');
				$email->subject('HOT AICE Tシャツ注文を承りました');
				$email->emailFormat('text');
				$email->template('default');
				$email->viewVars(compact('arrVal'));
				$email->send();
				return $this->redirect(array('action' => 'finish'));
			}
			return $this->redirect(array('action' => 'add'));
		}
	}

	public function finish() {
	}
}
