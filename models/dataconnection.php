<?php
class Dataconnection extends AppModel {
	var $name = 'Dataconnection';
	var $displayField = 'name';
        
	public $validate = array(
            'name' => array('rule' => 'notEmpty'),
            'host' => array('rule' => 'notEmpty'),
            'username' => array('rule' => 'notEmpty'),
            'password' => array('rule' => 'notEmpty'),
            'catalog' => array('rule' => 'notEmpty')
        );     
        
	var $belongsTo = array(
		'Datatype' => array(
			'className' => 'Datatype',
			'foreignKey' => 'datatype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Website' => array(
			'className' => 'Website',
			'foreignKey' => 'website_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>