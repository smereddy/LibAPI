<?php
App::uses('AppController', 'Controller');
/**
 * ItemsDonateds Controller
 *
 * @property ItemsDonated $ItemsDonated
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemsDonatedsController extends AppController {

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
		$this->ItemsDonated->recursive = 0;
		$this->set('itemsDonateds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsDonated->exists($id)) {
			throw new NotFoundException(__('Invalid items donated'));
		}
		$options = array('conditions' => array('ItemsDonated.' . $this->ItemsDonated->primaryKey => $id));
		$this->set('itemsDonated', $this->ItemsDonated->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsDonated->create();
			if ($this->ItemsDonated->save($this->request->data)) {
				$this->Session->setFlash(__('The items donated has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items donated could not be saved. Please, try again.'));
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
		if (!$this->ItemsDonated->exists($id)) {
			throw new NotFoundException(__('Invalid items donated'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemsDonated->save($this->request->data)) {
				$this->Session->setFlash(__('The items donated has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items donated could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsDonated.' . $this->ItemsDonated->primaryKey => $id));
			$this->request->data = $this->ItemsDonated->find('first', $options);
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
		$this->ItemsDonated->id = $id;
		if (!$this->ItemsDonated->exists()) {
			throw new NotFoundException(__('Invalid items donated'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemsDonated->delete()) {
			$this->Session->setFlash(__('The items donated has been deleted.'));
		} else {
			$this->Session->setFlash(__('The items donated could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
