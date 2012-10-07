<?php
class ClientsController extends AppController {

        var $scaffold;
    
	var $name = 'Clients';
	
        var $helpers = array(
            'Ajax', 
            'Js'
        );
        
        var $paginate = array(
            'order' => array(
                'Client.name' => 'asc'
            ),
            'limit' => 25
        );

	function index() {
		
            $this->Client->recursive = 0;
            $this->set('clients', $this->paginate());
            $this->helpers['Paginator'] = array('ajax' => 'Ajax');

	}

        function view($slug = null) {
		
            if (!$slug) {
                    $this->Session->setFlash(__('Invalid client', true));
                    $this->redirect(array('action' => 'index'));
            }

            $this->set('details', $this->Client->find('first', array(
                'conditions' => array('Client.slug' => $slug),
                'recursive' => -1
            )));

            $this->set('client_contacts', $this->Client->Contact->find('all', array('conditions' => array('Client.slug' => $slug))));
            $this->set('client_websites', $this->Client->Website->find('all', array('conditions' => array('Client.slug' => $slug))));
            $this->set('client_domaincontrols', $this->Client->Domaincontrol->find('all', array('conditions' => array('Client.slug' => $slug))));
            $this->set('client_addresses', $this->Client->Address->find('all', array('conditions' => array('Client.slug' => $slug))));
            $this->set('client_accounts', $this->Client->Account->find('all', array('conditions' => array('Client.slug' => $slug))));

	}

	function add() {
            
            if (!empty($this->data)) {
                $this->Client->create();
                if ($this->Client->save($this->data)) {
                    $this->Session->setFlash(__('The client has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The client could not be saved. Please, try again.', true));
                }
            }
                
	}

	function edit($slug = null) {
		
            if (!$slug && empty($this->data)) {
                $this->Session->setFlash(__('Invalid client', true));
                $this->redirect(array('action' => 'index'));
            }

            if (!empty($this->data)) {
                if ($this->Client->save($this->data)) {
                    
                    $this->Session->setFlash(__('Client details have been updated', true));
                    
                    $this->redirect(array('controller'=>'clients','action'=>'view',$this->data[Client][hidden_slug]));
                    
                } else {
                    $this->Session->setFlash(__('The client could not be saved. Please, try again.', true));
                }
            }

            $this->data = $this->Client->find('first', array(
                 'conditions' => array('Client.slug' => $slug),
                'recursive' => -1
            ));

            $this->set('details', $this->Client->find('first', array(
                    'conditions' => array('Client.slug' => $slug),
                    'recursive' => -1
            )));
            
	}
        
        function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for client', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Client->delete($id)) {
			$this->Session->setFlash(__('Client deleted', true));
			//$this->redirect(array('action'=>'index'));
                        $this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Client was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}        
        
        
}
?>