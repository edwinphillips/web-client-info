<?php
/* DatabaseType Test cases generated on: 2012-04-07 15:36:53 : 1333809413*/
App::import('Model', 'DatabaseType');

class DatabaseTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.database_type', 'app.database_connection', 'app.website', 'app.client', 'app.contact');

	function startTest() {
		$this->DatabaseType =& ClassRegistry::init('DatabaseType');
	}

	function endTest() {
		unset($this->DatabaseType);
		ClassRegistry::flush();
	}

}
?>