<?php
/* Ftpconnections Test cases generated on: 2012-04-15 20:11:33 : 1334517093*/
App::import('Controller', 'Ftpconnections');

class TestFtpconnectionsController extends FtpconnectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FtpconnectionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ftpconnection', 'app.protocol', 'app.website', 'app.client', 'app.contact', 'app.domaincontrol', 'app.address', 'app.phonenumber', 'app.account', 'app.provider', 'app.dataconnection', 'app.datatype', 'app.adminarea');

	function startTest() {
		$this->Ftpconnections =& new TestFtpconnectionsController();
		$this->Ftpconnections->constructClasses();
	}

	function endTest() {
		unset($this->Ftpconnections);
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