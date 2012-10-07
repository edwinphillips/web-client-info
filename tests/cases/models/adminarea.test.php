<?php
/* Adminarea Test cases generated on: 2012-04-07 20:58:16 : 1333828696*/
App::import('Model', 'Adminarea');

class AdminareaTestCase extends CakeTestCase {
	var $fixtures = array('app.adminarea', 'app.website', 'app.client', 'app.contact', 'app.dataconnection', 'app.datatype', 'app.ftpconnection', 'app.protocol');

	function startTest() {
		$this->Adminarea =& ClassRegistry::init('Adminarea');
	}

	function endTest() {
		unset($this->Adminarea);
		ClassRegistry::flush();
	}

}
?>