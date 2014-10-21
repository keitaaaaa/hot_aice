<?php
class PostsController extends AppController {
	public $helper = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Post->create();
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your post.'));
		}
	}

	public function edit($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}

		if($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}
		
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
}