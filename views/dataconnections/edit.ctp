<?php
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Edit Database Connection Details',
        'name',
        'host',
        'username',
        'password'=>array('type'=>'text'),
        'catalog',
        'datatype_id',
        'website_id',
        'details'
    ));
    echo $this->Form->end('Edit Database Connection Details');
?>