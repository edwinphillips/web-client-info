<?php
/* Domaincontrols Test cases generated on: 2012-04-15 20:33:36 : 1334518416*/
App::import('Controller', 'Domaincontrols');

class TestDomaincontrolsController extends DomaincontrolsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DomaincontrolsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.domaincontrol', 'app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea', 'app.address', 'app.phonenumber', 'app.account', 'app.provider');

	function startTest() {
		$this->Domaincontrols =& new TestDomaincontrolsController();
		$this->Domaincontrols->constructClasses();
	}

	function endTest() {
		unset($this->Domaincontrols);
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