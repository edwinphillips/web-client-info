<?php
class Website extends AppModel {
    
	var $name = 'Website';
        var $order = 'Website.name';
	var $displayField = 'url';
        
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
            ),
            'url' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Please enter the website URL'
                ),
                'valid' => array(
                    'rule' => 'url',
                    'message' => 'Please enter a valid URL'
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

	var $hasMany = array(
		'Dataconnection' => array(
			'className' => 'Dataconnection',
			'foreignKey' => 'website_id',
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
		'Ftpconnection' => array(
			'className' => 'ftpconnection',
			'foreignKey' => 'website_id',
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
		'Adminarea' => array(
			'className' => 'Adminarea',
			'foreignKey' => 'website_id',
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