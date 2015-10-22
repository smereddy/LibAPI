<?php
App::uses('AppController', 'Controller');
/**
 * Appeals Controller
 *
 * @property Appeal $Appeal
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AppealsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Appeal->recursive = 0;
		$this->set('appeals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Appeal->exists($id)) {
			throw new NotFoundException(__('Invalid appeal'));
		}
		$options = array('conditions' => array('Appeal.' . $this->Appeal->primaryKey => $id));
		$this->set('appeal', $this->Appeal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Appeal->create();
			if ($this->Appeal->save($this->request->data)) {
				$this->Session->setFlash(__('The appeal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appeal could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Appeal->exists($id)) {
			throw new NotFoundException(__('Invalid appeal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Appeal->save($this->request->data)) {
				$this->Session->setFlash(__('The appeal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appeal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Appeal.' . $this->Appeal->primaryKey => $id));
			$this->request->data = $this->Appeal->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Appeal->id = $id;
		if (!$this->Appeal->exists()) {
			throw new NotFoundException(__('Invalid appeal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Appeal->delete()) {
			$this->Session->setFlash(__('The appeal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The appeal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
