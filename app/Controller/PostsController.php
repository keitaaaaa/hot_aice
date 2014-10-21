<?php
class PostsController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('Posts', $this->Post->find('all'));
	}
}