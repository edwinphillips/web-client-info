<?php
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Add Admin Area Details',
        'name',
        'url',
        'username',
        'password',
        'website_id',
        'details'
    ));
    echo $this->Form->end('Add Admin Area Details');
?>