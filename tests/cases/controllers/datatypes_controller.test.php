<?php
/* Datatypes Test cases generated on: 2012-04-07 15:55:53 : 1333810553*/
App::import('Controller', 'Datatypes');

class TestDatatypesController extends DatatypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DatatypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.datatype', 'app.dataconnection', 'app.website', 'app.client', 'app.contact');

	function startTest() {
		$this->Datatypes =& new TestDatatypesController();
		$this->Datatypes->constructClasses();
	}

	function endTest() {
		unset($this->Datatypes);
		ClassRegistry::flush();
	}

}
?>