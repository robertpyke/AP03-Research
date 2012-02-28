<?php
App::uses('Occurrence', 'Model');

class OccurrenceTestCase extends CakeTestCase {
	public $fixtures = array('app.occurrence');

	public function setup() {
		parent::setUp();
		// From Cake PHP book:
		//
		// When setting up your Model for testing be sure to use ClassRegistry::init('YourModelName'); 
		// as it knows to use your test database connection.
		$this->Occurrence = ClassRegistry::init('Occurrence');
	}

	// Make sure that everything appears a-okay with the world
	public function testTrueIsIndeedTrue() {
		$this->assertEquals(true, true);
	}

	// This confirms that our setup did what we expect. This should never fail.
	public function testOccurrenceIsIndeedOccurrence() {
		$this->assertInstanceOf('Occurrence', $this->Occurrence);
	}

	public function testShouldNotBeAbleToCreateOccurrenceWithoutLatitude() {
		$this->assertFalse(
			$this->Occurrence->save(
				array(
					'Occurrence' => array('latitude' => '10.0121')
				)
			)
		);
		$this->assertEmpty($this->Occurrence->id);
	}
	
	public function testShouldNotBeAbleToCreateOccurrenceWithBadLatitudeOver() {
		$this->assertFalse(
			$this->Occurrence->save(
				array(
					'Occurrence' => array('latitude' => '90.0001', 'longitude' => '0')
				)
			)
		);
		$this->assertEmpty($this->Occurrence->id);
	}
	
	public function testShouldNotBeAbleToCreateOccurrenceWithBadLatitudeUnder() {
		$this->assertFalse(
			$this->Occurrence->save(
				array(
					'Occurrence' => array('latitude' => '-90.0001', 'longitude' => '0')
				)
			)
		);
		$this->assertEmpty($this->Occurrence->id);
	}

	public function testShouldNotBeAbleToCreateOccurrenceWithBadLongitudeOver() {
		$this->assertFalse(
			$this->Occurrence->save(
				array(
					'Occurrence' => array('latitude' => '90', 'longitude' => '180.001')
				)
			)
		);
		$this->assertEmpty($this->Occurrence->id);
	}
	
	public function testShouldNotBeAbleToCreateOccurrenceWithBadLongitudeUnder() {
		$this->assertFalse(
			$this->Occurrence->save(
				array(
					'Occurrence' => array('latitude' => '-90', 'longitude' => '-180.001')
				)
			)
		);
		$this->assertEmpty($this->Occurrence->id);
	}

	public function testShouldBeAbleToCreateOccurrenceWithLatitudeAndLongitude() {
		$this->assertNotEmpty(
			$this->Occurrence->save(
				array(
					'Occurrence' => array('latitude' => '10.121', 'longitude' => '13.11')
				)
			)
		);
		$this->assertNotEmpty($this->Occurrence->id);
	}
	
}
