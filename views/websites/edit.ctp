<?php
    $this->Html->addCrumb('Websites', array('controller'=>'websites'));
    $this->Html->addCrumb($details['Website']['name'],array('controller'=>'websites','action'=>'view',$details['Website']['slug']));
    $this->Html->addCrumb('Edit');
    
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Edit Website',
        'name',
        'url',
        'hidden_slug'=>array('value'=>$details['Website']['slug'],'type'=>'hidden'),
        'details'
    ));
    echo $this->Form->end('Edit Website');
?>