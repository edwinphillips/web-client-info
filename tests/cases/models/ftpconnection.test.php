<?php
/* Ftpconnection Test cases generated on: 2012-04-07 18:46:08 : 1333820768*/
App::import('Model', 'Ftpconnection');

class FtpconnectionTestCase extends CakeTestCase {
	var $fixtures = array('app.ftpconnection', 'app.protocol', 'app.website', 'app.client', 'app.contact', 'app.dataconnection', 'app.datatype');

	function startTest() {
		$this->Ftpconnection =& ClassRegistry::init('Ftpconnection');
	}

	function endTest() {
		unset($this->Ftpconnection);
		ClassRegistry::flush();
	}

}
?>