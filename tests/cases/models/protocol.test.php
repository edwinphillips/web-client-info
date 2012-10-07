<?php
/* Protocol Test cases generated on: 2012-04-07 18:23:00 : 1333819380*/
App::import('Model', 'Protocol');

class ProtocolTestCase extends CakeTestCase {
	var $fixtures = array('app.protocol');

	function startTest() {
		$this->Protocol =& ClassRegistry::init('Protocol');
	}

	function endTest() {
		unset($this->Protocol);
		ClassRegistry::flush();
	}

}
?>