<?php 

    echo $html->addCrumb('Contacts',array('controller'=>'contacts','action'=>'index')); 
    echo $html->addCrumb($details['Contact']['firstname'] . ' ' . $details['Contact']['lastname'],array('controller'=>'contacts','action'=>'view',$details['Contact']['slug']));
    echo $html->addCrumb('Edit');

    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Edit details for contact: ' . $details['Contact']['firstname'] . ' ' . $details['Contact']['lastname'],
        'firstname',
        'lastname',
        'email',
        'phone',
        'mobile',
        'client_id',
        'details'
    ));
    echo $this->Form->end('Edit Contact');
?>
