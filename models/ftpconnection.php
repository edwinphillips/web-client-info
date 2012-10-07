<?php
class Ftpconnection extends AppModel {
	var $name = 'Ftpconnection';
	var $displayField = 'name';
        
	public $validate = array(
            'name' => array('rule' => 'notEmpty'),
            'host' => array('rule' => 'notEmpty'),
            'username' => array('rule' => 'notEmpty'),
            'password' => array('rule' => 'notEmpty')
        );
        
	var $belongsTo = array(
		'Protocol' => array(
			'className' => 'Protocol',
			'foreignKey' => 'protocol_id',
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