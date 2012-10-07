<?php
/* Client Test cases generated on: 2012-04-07 11:39:40 : 1333795180*/
App::import('Model', 'Client');

class ClientTestCase extends CakeTestCase {
	var $fixtures = array('app.client', 'app.contact', 'app.website');

	function startTest() {
		$this->Client =& ClassRegistry::init('Client');
	}

	function endTest() {
		unset($this->Client);
		ClassRegistry::flush();
	}

}
?>