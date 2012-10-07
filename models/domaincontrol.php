<?php
class Domaincontrol extends AppModel {
	var $name = 'Domaincontrol';
	var $displayField = 'name';

 	public $validate = array(
            'name' => array('rule' => 'notEmpty'),
            'url' => array('rule' => 'notEmpty'),
            'username' => array('rule' => 'notEmpty'),
            'password' => array('rule' => 'notEmpty')
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