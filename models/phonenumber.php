<?php
class Phonenumber extends AppModel {
    
	var $name = 'Phonenumber';
	var $displayField = 'number';
        
	public $validate = array(
            'number' => array('rule' => 'notEmpty')
        );
        
	var $belongsTo = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
}
?>