<?php
    $this->Html->addCrumb('Websites', array('controller'=>'websites'));
    $this->Html->addCrumb($details['Website']['name'],array('controller'=>'websites','action'=>'view',$details['Website']['slug']));
    $this->Html->addCrumb('Add FTP Connection details');
    
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Add FTP Connection Details',
        'name',
        'host',
        'username',
        'password',
        'path',
        'protocol_id',
        'website_id',
        'details'
    ));
    echo $this->Form->end('Add FTP Connection Details');
?>