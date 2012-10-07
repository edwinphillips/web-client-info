<?php
/* Protocols Test cases generated on: 2012-04-07 18:23:17 : 1333819397*/
App::import('Controller', 'Protocols');

class TestProtocolsController extends ProtocolsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProtocolsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.protocol');

	function startTest() {
		$this->Protocols =& new TestProtocolsController();
		$this->Protocols->constructClasses();
	}

	function endTest() {
		unset($this->Protocols);
		ClassRegistry::flush();
	}

}
?>