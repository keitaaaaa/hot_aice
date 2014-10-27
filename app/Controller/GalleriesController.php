<?php
class GalleriesController extends AppController {
	public $helper = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		// $this->set('galleries', $this->Gallery->find('all'));
	}
}