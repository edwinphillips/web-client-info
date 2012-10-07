<?php
/* Databases Test cases generated on: 2012-04-07 12:17:29 : 1333797449*/
App::import('Controller', 'Databases');

class TestDatabasesController extends DatabasesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DatabasesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.databasis');

	function startTest() {
		$this->Databases =& new TestDatabasesController();
		$this->Databases->constructClasses();
	}

	function endTest() {
		unset($this->Databases);
		ClassRegistry::flush();
	}

}
?>