<?php
/* Addresses Test cases generated on: 2012-04-15 20:38:43 : 1334518723*/
App::import('Controller', 'Addresses');

class TestAddressesController extends AddressesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AddressesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.address', 'app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea', 'app.domaincontrol', 'app.account', 'app.provider', 'app.phonenumber');

	function startTest() {
		$this->Addresses =& new TestAddressesController();
		$this->Addresses->constructClasses();
	}

	function endTest() {
		unset($this->Addresses);
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