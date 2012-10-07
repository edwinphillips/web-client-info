<?php
class DataconnectionsController extends AppController {

	var $name = 'Dataconnections';

	function index() {
		$this->Dataconnection->recursive = 0;
		$this->set('dataconnections', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid database connection details', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dataconnection', $this->Dataconnection->read(null, $id));
	}

	function add($slug = null) {
            if (!empty($this->data)) {
                $this->Dataconnection->create();
                if ($this->Dataconnection->save($this->data)) {
                    $this->Session->setFlash(__('The database connection details have been saved', true));
                    $this->redirect(array('controller'=>'websites','action'=>'view',$this->data['Dataconnection']['hidden_slug']));
                } else {
                    $this->Session->setFlash(__('The database connection details could not be saved. Please, try again.', true));
                }
            }

            if (!empty($this->params['pass']['0'])) {
                $this->set('websitedetails',$this->Dataconnection->Website->find('first',array('conditions'=>array('Website.slug'=>$this->params['pass']['0']),'fields'=>array('Website.id','Website.name','Website.slug'),'recursive'=>-1)));
            }
            
            $this->set('details', $this->Dataconnection->Website->find('first', array(
                    'conditions' => array('Website.slug' => $slug)
            )));
            
            $datatypes = $this->Dataconnection->Datatype->find('list');
            $websites = $this->Dataconnection->Website->find('list');
            $this->set(compact('datatypes', 'websites'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dataconnection', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dataconnection->save($this->data)) {
				$this->Session->setFlash(__('The dataconnection has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dataconnection could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dataconnection->read(null, $id);
		}
		$datatypes = $this->Dataconnection->Datatype->find('list');
		$websites = $this->Dataconnection->Website->find('list');
		$this->set(compact('datatypes', 'websites'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dataconnection', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dataconnection->delete($id)) {
			$this->Session->setFlash(__('Database connection details deleted', true));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Dataconnection was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>