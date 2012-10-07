<?php
    $this->Html->addCrumb('Contacts', array('controller'=>'contacts','action'=>'index'));
    $this->Html->addCrumb('Add contact');

    echo $this->Form->create();

    if (!empty($clientdetails)) {
    
        echo $this->Form->inputs(array(
            'legend' => 'Add a contact for client: ' . $clientdetails['Client']['name'],
            'firstname',
            'lastname',
            'email',
            'phone',
            'mobile',
            'client_id'=>array('default'=>$clientdetails['Client']['id'],'type'=>'hidden'),
            'details',
            'hidden_clientslug'=>array('value'=>$clientdetails['Client']['slug'],'type'=>'hidden')
        ));    

    } else {    
        
        echo $this->Form->inputs(array(
            'legend' => 'Add a Contact for a Client',
            'firstname',
            'lastname',
            'email',
            'phone',
            'mobile',
            'client_id',
            'details'
        ));   
        
    }
        
    echo $this->Form->end('Add Contact');
?>
