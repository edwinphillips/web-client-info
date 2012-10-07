<?php
    $this->Html->addCrumb('Clients', array('controller'=>'clients','action'=>'index'));
    
    if (!empty($clientdetails)) {
        $this->Html->addCrumb($clientdetails['Client']['name'],array('controller'=>'clients','action'=>'view',$clientdetails['Client']['slug']));
    }
    
    $this->Html->addCrumb('Add address');
    
    echo $this->Form->create();
    
    if (!empty($clientdetails)) {
    
        echo $this->Form->inputs(array(
            'legend' => 'Add Address for client: ' . $clientdetails['Client']['name'],
            'name',
            'address1',
            'address2',
            'town',
            'county',
            'postcode',
            'client_id'=>array('default'=>$clientdetails['Client']['id'],'type'=>'hidden'),
            'details'
        ));
    
    } else {

        echo $this->Form->inputs(array(
            'legend' => 'Add Address',
            'name',
            'address1',
            'address2',
            'town',
            'county',
            'postcode',
            'client_id',
            'details'
        ));
        
    }    
        
    echo $this->Form->end('Add Address');
?>
