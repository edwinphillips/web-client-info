<?php
class Datatype extends AppModel {
	var $name = 'Datatype';
	var $displayField = 'name';
        
	public $validate = array(
            'name' => array('rule' => 'notEmpty')
        );
        
	var $belongsTo = array(
		'Dataconnection' => array(
			'className' => 'Dataconnection',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>