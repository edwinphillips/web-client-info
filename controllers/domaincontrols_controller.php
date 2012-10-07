<?php
class DomaincontrolsController extends AppController {

	var $name = 'Domaincontrols';

	function index() {
		$this->Domaincontrol->recursive = 0;
		$this->set('domaincontrols', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid domain control details', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('domaincontrol', $this->Domaincontrol->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Domaincontrol->create();
			if ($this->Domaincontrol->save($this->data)) {
				$this->Session->setFlash(__('The domain control details have been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The domain control details could not be saved. Please, try again.', true));
			}
		}
                
                if (!empty($this->params['pass']['0'])) {
                    $this->set('clientdetails',$this->Domaincontrol->Client->find('first',array('conditions'=>array('Client.slug'=>$this->params['pass']['0']),'fields'=>array('Client.id','Client.name','Client.slug'),'recursive'=>-1)));
                }
                
		$clients = $this->Domaincontrol->Client->find('list');
		$this->set(compact('clients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid domaincontrol', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Domaincontrol->save($this->data)) {
				$this->Session->setFlash(__('The domain control details have been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The domain control details could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Domaincontrol->read(null, $id);
		}
		$clients = $this->Domaincontrol->Client->find('list');
		$this->set(compact('clients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for domaincontrol', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Domaincontrol->delete($id)) {
			$this->Session->setFlash(__('Domain control details deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Domain control details were not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>