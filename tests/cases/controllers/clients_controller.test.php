<?php
/* Clients Test cases generated on: 2012-04-09 19:13:43 : 1333995223*/
App::import('Controller', 'Clients');

class TestClientsController extends ClientsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClientsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea', 'app.domaincontrol', 'app.address', 'app.phonenumber', 'app.account', 'app.provider');

	function startTest() {
		$this->Clients =& new TestClientsController();
		$this->Clients->constructClasses();
	}

	function endTest() {
		unset($this->Clients);
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