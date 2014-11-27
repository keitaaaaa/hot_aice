<?php
class PhotosController extends AppController {
	public $helper = array('Html', 'Form', 'Session');
	public $components = array('Session', 'Auth');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->deny('add');
	}

	public function index() {
		$this->set('photos', $this->Photo->find('all'));
	}

	public function add() {
		$this->set('photos', $this->Photo->find('all'));
		if ($this->request->is('post')) {
			$tmp = $this->request->data['Photo']['file']['tmp_name'];
			if(is_uploaded_file($tmp)) {
				$path = IMAGES."/upload";
				$file_name = basename($this->request->data['Photo']['file']['name']);
				$file = $path.DS.$file_name;
				if (move_uploaded_file($tmp, $file)) {
					$this->Photo->create();
					$this->request->data['Photo']['file_name'] = $file_name;
					if ($this->Photo->save($this->request->data)) {
						$this->Session->setFlash(__('The upload has been saved'));
						$this->redirect(array('action' => 'add'));
					} else {
						$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
					}
				}
			}
		}
	}
}