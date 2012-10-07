<?php
/* DatabaseTypes Test cases generated on: 2012-04-07 13:59:40 : 1333803580*/
App::import('Controller', 'DatabaseTypes');

class TestDatabaseTypesController extends DatabaseTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DatabaseTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.database_type', 'app.database_connection');

	function startTest() {
		$this->DatabaseTypes =& new TestDatabaseTypesController();
		$this->DatabaseTypes->constructClasses();
	}

	function endTest() {
		unset($this->DatabaseTypes);
		ClassRegistry::flush();
	}

}
?>