<?php
/* Website Test cases generated on: 2012-04-07 15:52:42 : 1333810362*/
App::import('Model', 'Website');

class WebsiteTestCase extends CakeTestCase {
	var $fixtures = array('app.website', 'app.client', 'app.contact', 'app.dataconnection');

	function startTest() {
		$this->Website =& ClassRegistry::init('Website');
	}

	function endTest() {
		unset($this->Website);
		ClassRegistry::flush();
	}

}
?>