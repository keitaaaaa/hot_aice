<?php
class PostsController extends AppController {
	public $helper = array('Html', 'Form', 'Session');
	public $components = array('Session', 'Auth');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->deny('add', 'user_index', 'user_view');
	}

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function user_index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}

	public function user_view($id = null) {
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
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'user_index'));
			}
			$this->Session->setFlash(__('Unable to add your post.'));
			return $this->redirect(array('action' => 'user_index'));
		}
	}

	public function edit($id = null) {
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
				return $this->redirect(array('action' => 'user_view', $id));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}
		
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}

	public function delete($id = null) {
    	if ($this->request->is('get')) {
        	throw new MethodNotAllowedException();
    	}

    	if ($this->Post->delete($id)) {
        	$this->Session->setFlash(__('The post has been deleted.'));
        	return $this->redirect(array('action' => 'user_index'));
    	}
    }

    public function isAuthorized($user) {
	    // 登録済ユーザーは投稿できる
	    if ($this->action === 'add') {
	        return true;
	    }

	    // 投稿のオーナーは編集や削除ができる
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $postId = (int) $this->request->params['pass'][0];
	        if ($this->Post->isOwnedBy($postId, $user['id'])) {
	            return true;
	        }
	    }

	    return parent::isAuthorized($user);
	}
}