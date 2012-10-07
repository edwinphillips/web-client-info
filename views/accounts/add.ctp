<?php
    $this->Html->addCrumb('Clients', array('controller'=>'clients','action'=>'index'));
    
    if (!empty($clientdetails)) {
        $this->Html->addCrumb($clientdetails['Client']['name'],array('controller'=>'clients','action'=>'view',$clientdetails['Client']['slug']));
    }
    
    $this->Html->addCrumb('Add web account');
    
    echo $this->Form->create();
    
    if (!empty($clientdetails)) {
    
        echo $this->Form->inputs(array(
            'legend' => 'Add Web Account Details for ' . $clientdetails['Client']['name'],
            'provider_id',
            'url',
            'username',
            'password',
            'client_id'=>array('default'=>$clientdetails['Client']['id'],'type'=>'hidden'),
            'details'
        ));
    
    } else {
        
        echo $this->Form->inputs(array(
            'legend' => 'Add Web Account Details',
            'provider_id',
            'url',
            'username',
            'password',
            'client_id',
            'details'
        ));
        
    }    
    
    echo $this->Form->end('Add Account Details');
?>