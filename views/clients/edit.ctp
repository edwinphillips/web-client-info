<?php 

    echo $html->addCrumb('Clients',array('controller'=>'clients','action'=>'index')); 
    echo $html->addCrumb($details['Client']['name'],array('controller'=>'clients','action'=>'view',$details['Client']['slug']));
    echo $html->addCrumb('Edit');
    
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Edit details for client: ' . $details['Client']['name'],
        'name',
        'details',
        'hidden_slug'=>array('type'=>'hidden','value'=>$details['Client']['slug'])
    ));
    echo $this->Form->end('Edit Client');
?>