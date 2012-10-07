<?php
class Contact extends AppModel {
    
	var $name = 'Contact';
        var $order = 'Contact.firstname';
	var $displayField = 'name';

        public $actsAs = array(
            'SoftDeletable',  
            'Sluggable'=>array(
                'label' => array('firstname','lastname'),
                'slug_field' => 'slug',
                'slug_max_length' => 128, 
                'overwrite' => 'true',
                'ignore' => ''
            )
        );
                
        public $validate = array(
            'name' => array('rule' => 'notEmpty'),
            'firstname' => array('rule' => 'notEmpty'),
            'lastname' => array('rule' => 'notEmpty'),
            'email' => array(
                'valid' => array(
                    'rule' => 'email',
                    'message' => 'Please enter a valid email address'
                ),
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Please enter an email'
                )
            )
        );
        
	var $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
}
?>