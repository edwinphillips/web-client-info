<?php
/* Dataconnections Test cases generated on: 2012-04-15 20:06:00 : 1334516760*/
App::import('Controller', 'Dataconnections');

class TestDataconnectionsController extends DataconnectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DataconnectionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dataconnection', 'app.datatype', 'app.website', 'app.client', 'app.contact', 'app.domaincontrol', 'app.address', 'app.phonenumber', 'app.account', 'app.provider', 'app.ftpconnection', 'app.protocol', 'app.adminarea');

	function startTest() {
		$this->Dataconnections =& new TestDataconnectionsController();
		$this->Dataconnections->constructClasses();
	}

	function endTest() {
		unset($this->Dataconnections);
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