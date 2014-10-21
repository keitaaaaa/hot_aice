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
}