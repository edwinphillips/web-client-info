<?php
class WebsitesController extends AppController {

	var $scaffold;
        
        var $name = 'Websites';
        
        var $helpers = array(
            'Ajax', 
            'Js'
        );
        
        var $paginate = array(
            'order' => array(
                'Website.name' => 'asc'
            ),
            'limit' => 25
        );

	function index() {
            
            $this->Website->recursive = 0;         
            $this->set('websites', $this->paginate());
            $this->helpers['Paginator'] = array('ajax' => 'Ajax');
            
	}

	function view($slug = null) {
            
            if (!$slug) {
                $this->Session->setFlash(__('Invalid website', true));
                $this->redirect(array('action' => 'index'));
            }
            
            $this->set('details', $this->Website->find('first', array(
                    'conditions' => array('Website.slug' => $slug)
                )));
            $this->set('website_dataconnections', $this->Website->Dataconnection->find('all', array('conditions' => array('Website.slug' => $slug))));
            $this->set('website_ftpconnections', $this->Website->Ftpconnection->find('all', array('conditions' => array('Website.slug' => $slug))));
            $this->set('website_adminareas', $this->Website->Adminarea->find('all', array('conditions' => array('Website.slug' => $slug))));  
            
        }

	function add() {
		if (!empty($this->data)) {
			$this->Website->create();
			if ($this->Website->save($this->data)) {
				$this->Session->setFlash(__('The website has been added', true));
				//$this->redirect(array('action' => 'index'));
                                
                                $this->redirect(array('controller'=>'clients','action'=>'view',$this->data['Website']['hidden_slug']));
                                
			} else {
				$this->Session->setFlash(__('The website could not be saved. Please, try again.', true));
			}
		}

                if (!empty($this->params['pass']['0'])) {
                    $this->set('clientdetails',$this->Website->Client->find('first',array('conditions'=>array('Client.slug'=>$this->params['pass']['0']),'fields'=>array('Client.id','Client.name','Client.slug'),'recursive'=>-1)));
                }
                
		$clients = $this->Website->Client->find('list');
		$this->set(compact('clients'));
	}

	function edit($slug = null) {
            
		if (!$slug && empty($this->data)) {
			$this->Session->setFlash(__('Invalid website', true));
			$this->redirect(array('action' => 'index'));
                        
		}
                
		if (!empty($this->data)) {
                    
			if ($this->Website->save($this->data)) {
				$this->Session->setFlash(__('The website details have been updated', true));
                                $this->redirect(array('controller'=>'websites','action'=>'view',$this->data['Website']['hidden_slug']));    
			} else {
				$this->Session->setFlash(__('The website could not be saved. Please, try again.', true));
			}
		}


                $this->data = $this->Website->find('first', array(
                    'conditions' => array('Website.slug' => $slug),
                    'recursive' => -1
                ));

                $this->set('details', $this->Website->find('first', array(
                        'conditions' => array('Website.slug' => $slug),
                        'recursive' => -1
                )));
                
		$clients = $this->Website->Client->find('list');
		$this->set(compact('clients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for website', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Website->delete($id)) {
			$this->Session->setFlash(__('Website deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Website was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>