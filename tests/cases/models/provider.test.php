<?php
/* Provider Test cases generated on: 2012-04-09 16:57:02 : 1333987022*/
App::import('Model', 'Provider');

class ProviderTestCase extends CakeTestCase {
	var $fixtures = array('app.provider');

	function startTest() {
		$this->Provider =& ClassRegistry::init('Provider');
	}

	function endTest() {
		unset($this->Provider);
		ClassRegistry::flush();
	}

}
?>