<?php
class Account extends AppModel {
	var $name = 'Account';
	var $displayField = 'provider_id';

        public $validate = array(
            'url' => array(
                'rule' => 'notEmpty'
            ),
            'username' => array(
                'rule' => 'notEmpty'
            ),
            'password' => array(
                'rule' => 'notEmpty'
            )
        );
        
	var $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provider' => array(
			'className' => 'Provider',
			'foreignKey' => 'provider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>