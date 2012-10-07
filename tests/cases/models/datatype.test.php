<?php
/* Datatype Test cases generated on: 2012-04-07 15:54:21 : 1333810461*/
App::import('Model', 'Datatype');

class DatatypeTestCase extends CakeTestCase {
	var $fixtures = array('app.datatype', 'app.dataconnection', 'app.website', 'app.client', 'app.contact');

	function startTest() {
		$this->Datatype =& ClassRegistry::init('Datatype');
	}

	function endTest() {
		unset($this->Datatype);
		ClassRegistry::flush();
	}

}
?>