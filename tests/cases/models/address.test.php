<?php
/* Address Test cases generated on: 2012-04-07 21:46:38 : 1333831598*/
App::import('Model', 'Address');

class AddressTestCase extends CakeTestCase {
	var $fixtures = array('app.address', 'app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea', 'app.domaincontrol');

	function startTest() {
		$this->Address =& ClassRegistry::init('Address');
	}

	function endTest() {
		unset($this->Address);
		ClassRegistry::flush();
	}

}
?>