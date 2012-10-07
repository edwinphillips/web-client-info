<?php
class FtpconnectionsController extends AppController {

	var $name = 'Ftpconnections';

	function index() {
		$this->Ftpconnection->recursive = 0;
		$this->set('ftpconnections', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ftpconnection', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ftpconnection', $this->Ftpconnection->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ftpconnection->create();
			if ($this->Ftpconnection->save($this->data)) {
				$this->Session->setFlash(__('The ftpconnection has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ftpconnection could not be saved. Please, try again.', true));
			}
		}
		$protocols = $this->Ftpconnection->Protocol->find('list');
		$websites = $this->Ftpconnection->Website->find('list');
		$this->set(compact('protocols', 'websites'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ftpconnection', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ftpconnection->save($this->data)) {
				$this->Session->setFlash(__('The ftpconnection has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ftpconnection could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ftpconnection->read(null, $id);
		}
		$protocols = $this->Ftpconnection->Protocol->find('list');
		$websites = $this->Ftpconnection->Website->find('list');
		$this->set(compact('protocols', 'websites'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ftpconnection', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ftpconnection->delete($id)) {
			$this->Session->setFlash(__('Ftpconnection deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ftpconnection was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>