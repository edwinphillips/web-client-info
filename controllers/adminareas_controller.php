<?php
class AdminareasController extends AppController {

	var $name = 'Adminareas';

	function index() {
		$this->Adminarea->recursive = 0;
		$this->set('adminareas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid adminarea', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('adminarea', $this->Adminarea->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Adminarea->create();
			if ($this->Adminarea->save($this->data)) {
				$this->Session->setFlash(__('The adminarea has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adminarea could not be saved. Please, try again.', true));
			}
		}
		$websites = $this->Adminarea->Website->find('list');
		$this->set(compact('websites'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid adminarea', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Adminarea->save($this->data)) {
				$this->Session->setFlash(__('The adminarea has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adminarea could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Adminarea->read(null, $id);
		}
		$websites = $this->Adminarea->Website->find('list');
		$this->set(compact('websites'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for adminarea', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Adminarea->delete($id)) {
			$this->Session->setFlash(__('Adminarea deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Adminarea was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>