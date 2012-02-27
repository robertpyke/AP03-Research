<?php
App::uses('Species', 'Model');

class SpeciesTestCase extends CakeTestCase {
	public $fixtures = array('app.species');

	public function setup() {
		parent::setUp();
		// From Cake PHP book:
		//
		// When setting up your Model for testing be sure to use ClassRegistry::init('YourModelName'); 
		// as it knows to use your test database connection.
		$this->Species = ClassRegistry::init('Species');
	}

	/**
	  * Dummy test to make sure test framework is working as expected
		* TODO: Remove this once cake PHP framework is confirmed working as expected
		*/
	public function testTrueIsIndeedTrue() {
		$this->assertEquals(true, true);
	}
}