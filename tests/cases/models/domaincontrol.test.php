<?php
/* Domaincontrol Test cases generated on: 2012-04-07 21:24:42 : 1333830282*/
App::import('Model', 'Domaincontrol');

class DomaincontrolTestCase extends CakeTestCase {
	var $fixtures = array('app.domaincontrol', 'app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea');

	function startTest() {
		$this->Domaincontrol =& ClassRegistry::init('Domaincontrol');
	}

	function endTest() {
		unset($this->Domaincontrol);
		ClassRegistry::flush();
	}

}
?>