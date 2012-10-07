<?php
/* Websites Test cases generated on: 2012-04-12 00:47:29 : 1334188049*/
App::import('Controller', 'Websites');

class TestWebsitesController extends WebsitesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class WebsitesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.website', 'app.client', 'app.contact', 'app.domaincontrol', 'app.address', 'app.phonenumber', 'app.account', 'app.provider', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea');

	function startTest() {
		$this->Websites =& new TestWebsitesController();
		$this->Websites->constructClasses();
	}

	function endTest() {
		unset($this->Websites);
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