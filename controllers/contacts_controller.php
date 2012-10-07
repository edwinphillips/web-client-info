<?php
class ContactsController extends AppController {

	var $scaffold;
        
        var $name = 'Contacts';
        
        var $helpers = array(
            'Ajax', 
            'Js'
        );
        
        var $paginate = array(
            'order' => array(
                'Contact.firstname' => 'asc'
            ),
            'limit' => 25
        );

        
	function index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
                $this->helpers['Paginator'] = array('ajax' => 'Ajax');
	}

	function view($slug = null) {
            
		if (!$slug) {
                    
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
		}
                
		$this->set('details', $this->Contact->find('first', array(
                    'conditions' => array('Contact.slug' => $slug)
                )));                
                
        }

	function add() {
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The contact has been saved', true));
				
                                
                                if (!empty($this->data[Contact][hidden_clientslug])) {
                                    $this->redirect(array('controller'=>'clients','action' => 'view',$this->data['Contact']['hidden_clientslug']));
                                } else {
                                    $this->redirect(array('action' => 'index'));
                                }
                                
                                
                                
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.', true));
			}
		}
                
                if (!empty($this->params['pass']['0'])) {
                    $this->set('clientdetails',$this->Contact->Client->find('first',array('conditions'=>array('Client.slug'=>$this->params['pass']['0']),'fields'=>array('Client.id','Client.name','Client.slug'),'recursive'=>-1)));
                }
                
                $clients = $this->Contact->Client->find('list');
                $this->set(compact('clients'));
	}

	function edit($slug = null) {
            
		if (!$slug && empty($this->data)) {
                    
			$this->Session->setFlash(__('Invalid contact', true));
			$this->redirect(array('action' => 'index'));
                        
		}
                
		if (!empty($this->data)) {
                    
			if ($this->Contact->save($this->data)) {
                            
				$this->Session->setFlash(__('The contact has been saved', true));
				$this->redirect(array('action' => 'index'));
                                
			} else {
                            
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.', true));
			
                        }
		}
                
                $this->data = $this->Contact->find('first', array(
                    'conditions' => array('Contact.slug' => $slug),
                    'recursive' => -1
                ));

                $this->set('details', $this->Contact->find('first', array(
                        'conditions' => array('Contact.slug' => $slug),
                        'recursive' => -1
                )));
                
		$clients = $this->Contact->Client->find('list');
		$this->set(compact('clients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->delete($id)) {
			$this->Session->setFlash(__('Contact deleted', true));
			//$this->redirect(array('action'=>'index'));
                        $this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>