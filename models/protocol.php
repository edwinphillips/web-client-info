<?php
class Protocol extends AppModel {
	var $name = 'Protocol';
	var $displayField = 'name';
        
        public $validate = array(
            'name' => array('rule' => 'notEmpty')
        );
}
?>