<?php
/* Phonenumber Test cases generated on: 2012-04-07 22:08:36 : 1333832916*/
App::import('Model', 'Phonenumber');

class PhonenumberTestCase extends CakeTestCase {
	var $fixtures = array('app.phonenumber', 'app.address', 'app.client', 'app.contact', 'app.website', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol', 'app.adminarea', 'app.domaincontrol');

	function startTest() {
		$this->Phonenumber =& ClassRegistry::init('Phonenumber');
	}

	function endTest() {
		unset($this->Phonenumber);
		ClassRegistry::flush();
	}

}
?>