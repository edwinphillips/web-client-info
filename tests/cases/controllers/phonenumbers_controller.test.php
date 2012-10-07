<?php
/* Phonenumbers Test cases generated on: 2012-04-07 22:08:46 : 1333832926*/
App::import('Controller', 'Phonenumbers');

class TestPhonenumbersController extends PhonenumbersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PhonenumbersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.phonenumber', 'app.address', 'app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea', 'app.domaincontrol');

	function startTest() {
		$this->Phonenumbers =& new TestPhonenumbersController();
		$this->Phonenumbers->constructClasses();
	}

	function endTest() {
		unset($this->Phonenumbers);
		ClassRegistry::flush();
	}

}
?>