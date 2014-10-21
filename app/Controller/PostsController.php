<?php
class PostsController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id) {
		$post = $this->Post->findById($id);
		$this->set('post', $post);
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Post->create();
			if($this->Post->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id) {
		$post = $this->Post->findById($id);
		if($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if($this->Post->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			}
		}
	}
}