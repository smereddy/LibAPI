<?php
App::uses('AppController', 'Controller');
/**
 * Libraries Controller
 *
 * @property Library $Library
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LibrariesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
var $helpers = array('Html', 'Form','Csv'); 
function export()
{
    $this->set('posts', $this->Post->find('all'));
    $this->layout = null;
    $this->autoLayout = false;
    Configure::write('debug','0');
}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Library->recursive = 0;
		$this->set('libraries', $this->Paginator->paginate());
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
		$this->set('library', $this->Library->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Library->create();
			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
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
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
			$this->request->data = $this->Library->find('first', $options);
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
		$this->Library->id = $id;
		if (!$this->Library->exists()) {
			throw new NotFoundException(__('Invalid library'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Library->delete()) {
			$this->Session->setFlash(__('The library has been deleted.'));
		} else {
			$this->Session->setFlash(__('The library could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
