<?php
/* Dataconnection Test cases generated on: 2012-04-07 15:53:44 : 1333810424*/
App::import('Model', 'Dataconnection');

class DataconnectionTestCase extends CakeTestCase {
	var $fixtures = array('app.dataconnection', 'app.website', 'app.client', 'app.contact', 'app.datatype');

	function startTest() {
		$this->Dataconnection =& ClassRegistry::init('Dataconnection');
	}

	function endTest() {
		unset($this->Dataconnection);
		ClassRegistry::flush();
	}

}
?>