<?php
/* DatabaseConnections Test cases generated on: 2012-04-07 14:01:17 : 1333803677*/
App::import('Controller', 'DatabaseConnections');

class TestDatabaseConnectionsController extends DatabaseConnectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DatabaseConnectionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.database_connection', 'app.database_type');

	function startTest() {
		$this->DatabaseConnections =& new TestDatabaseConnectionsController();
		$this->DatabaseConnections->constructClasses();
	}

	function endTest() {
		unset($this->DatabaseConnections);
		ClassRegistry::flush();
	}

}
?>