<?php
/* Adminareas Test cases generated on: 2012-04-15 20:14:07 : 1334517247*/
App::import('Controller', 'Adminareas');

class TestAdminareasController extends AdminareasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdminareasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.adminarea', 'app.website', 'app.client', 'app.contact', 'app.domaincontrol', 'app.address', 'app.phonenumber', 'app.account', 'app.provider', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol');

	function startTest() {
		$this->Adminareas =& new TestAdminareasController();
		$this->Adminareas->constructClasses();
	}

	function endTest() {
		unset($this->Adminareas);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>