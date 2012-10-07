<?php
    $this->Html->addCrumb('Clients',array('controller'=>'clients'));
    $this->Html->addCrumb($clientdetails['Client']['name'],array('controller'=>'clients','action'=>'view',$clientdetails['Client']['slug']));
    $this->Html->addCrumb('Add Domain Control');
    
    echo $this->Form->create();
    
    if (!empty($clientdetails)) {
    
        echo $this->Form->inputs(array(
            'legend' => 'Add Domain Control Details for client: ' . $clientdetails['Client']['name'],
            'name',
            'url',
            'username',
            'password',
            'details',
            'client_id'=>array('default'=>$clientdetails['Client']['id'],'type'=>'hidden')
        ));
        
    } else {
        
        echo $this->Form->inputs(array(
            'legend' => 'Add Domain Control Details',
            'name',
            'url',
            'username',
            'password',
            'details',
            'client_id'
        ));        
        
    }    
        
    echo $this->Form->end('Add Domain Control Details');
?>
