<?php
class Provider extends AppModel {
	var $name = 'Provider';
        var $order = 'Provider.name';
	var $displayField = 'name';
        
	public $validate = array(
            'name' => array('rule' => 'notEmpty')
        );        
        
}
?>