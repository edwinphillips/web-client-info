<?php
    $this->Html->addCrumb('Websites', array('controller'=>'websites','action'=>'index'));
    $this->Html->addCrumb('Add website');
    
    echo $this->Form->create();
    
    if (!empty($clientdetails)) {

        echo $this->Form->inputs(array(
            'legend' => 'Add a website for client: ' . $clientdetails['Client']['name'],
            'name',
            'url',
            'client_id'=>array('default'=>$clientdetails['Client']['id'],'type'=>'hidden'),
            'details',
            'hidden_slug'=>array('value'=>$clientdetails['Client']['slug'],'type'=>'hidden')
        ));
        
    } else {

        echo $this->Form->inputs(array(
            'legend' => 'Add a website for a client',
            'name',
            'url',
            'client_id',
            'details'
        ));        
        
    }

    echo $this->Form->end('Add Website');
?>
