<?php
/* Providers Test cases generated on: 2012-04-09 16:28:47 : 1333985327*/
App::import('Controller', 'Providers');

class TestProvidersController extends ProvidersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProvidersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.provider');

	function startTest() {
		$this->Providers =& new TestProvidersController();
		$this->Providers->constructClasses();
	}

	function endTest() {
		unset($this->Providers);
		ClassRegistry::flush();
	}

}
?>