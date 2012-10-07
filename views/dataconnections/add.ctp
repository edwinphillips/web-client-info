<?php
    $this->Html->addCrumb('Websites', array('controller'=>'websites'));
    $this->Html->addCrumb($details['Website']['name'],array('controller'=>'websites','action'=>'view',$details['Website']['slug']));
    $this->Html->addCrumb('Add database connection details');
    
    echo $this->Form->create();
    
    if (!empty($websitedetails)) {
        
        echo $this->Form->inputs(array(
            'legend' => 'Add Database Connection Details for ' . $websitedetails['Website']['name'],
            'name',
            'host',
            'username',
            'password'=>array('type'=>'text'),
            'catalog',
            'datatype_id',
            'details',
            'website_id'=>array('default'=>$websitedetails['Website']['id'],'type'=>'hidden'),
            'hidden_slug'=>array('value'=>$websitedetails['Website']['slug'],'type'=>'hidden')
        ));

    } else {

        echo $this->Form->inputs(array(
            'legend' => 'Add Database Connection Details',
            'name',
            'host',
            'username',
            'password',
            'catalog',
            'datatype_id',
            'website_id'
        ));        
        
    }   
    
    echo $this->Form->end('Add Database Connection Details');
?>