<?php
/* DatabaseConnection Test cases generated on: 2012-04-07 15:37:44 : 1333809464*/
App::import('Model', 'DatabaseConnection');

class DatabaseConnectionTestCase extends CakeTestCase {
	var $fixtures = array('app.database_connection', 'app.database_type');

	function startTest() {
		$this->DatabaseConnection =& ClassRegistry::init('DatabaseConnection');
	}

	function endTest() {
		unset($this->DatabaseConnection);
		ClassRegistry::flush();
	}

}
?>