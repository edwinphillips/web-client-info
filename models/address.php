<?php
class Address extends AppModel {
	var $name = 'Address';
	var $displayField = 'name';
	
        public $validate = array(
            'name' => array('rule' => 'notEmpty'),
            'address1' => array('rule' => 'notEmpty')
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

	var $hasMany = array(
		'Phonenumber' => array(
			'className' => 'Phonenumber',
			'foreignKey' => 'address_id',
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