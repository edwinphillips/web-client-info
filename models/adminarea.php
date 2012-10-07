<?php
class Adminarea extends AppModel {
	var $name = 'Adminarea';
	var $displayField = 'name';

	public $validate = array(
            'name' => array('rule' => 'notEmpty'),
            'url' => array('rule' => 'notEmpty'),
            'username' => array('rule' => 'notEmpty'),
            'password' => array('rule' => 'notEmpty')
        );
        
	var $belongsTo = array(
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