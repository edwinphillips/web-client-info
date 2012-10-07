<?php
/* Account Test cases generated on: 2012-04-09 16:56:08 : 1333986968*/
App::import('Model', 'Account');

class AccountTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.provider');

	function startTest() {
		$this->Account =& ClassRegistry::init('Account');
	}

	function endTest() {
		unset($this->Account);
		ClassRegistry::flush();
	}

}
?>