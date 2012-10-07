<?php
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Add Client',
        'name',
        'details'
    ));
    echo $this->Form->end('Add Client');
?>