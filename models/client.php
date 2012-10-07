<?php
class Client extends AppModel {
    
	var $name = 'Client';
        var $order = 'Client.name';
	var $displayField = 'name';
        
        public $actsAs = array(
            'SoftDeletable',  
            'Sluggable'=>array(
                'label' => 'name',
                'slug_field' => 'slug',
                'slug_max_length' => 128, 
                'overwrite' => 'true',
                'ignore' => ''
            )
        );
        
        public $validate = array(
            'name' => array(
                'rule' => 'notEmpty'
            )
        );
        
	var $hasMany = array(
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Website' => array(
			'className' => 'Website',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Domaincontrol' => array(
			'className' => 'Domaincontrol',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)             
	);

}
?>