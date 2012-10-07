<?php
/* Contact Test cases generated on: 2012-04-07 11:35:34 : 1333794934*/
App::import('Model', 'Contact');

class ContactTestCase extends CakeTestCase {
	var $fixtures = array('app.contact', 'app.client');

	function startTest() {
		$this->Contact =& ClassRegistry::init('Contact');
	}

	function endTest() {
		unset($this->Contact);
		ClassRegistry::flush();
	}

}
?>