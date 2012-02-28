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

	// Make sure that everything appears a-okay with the world
	public function testTrueIsIndeedTrue() {
		$this->assertEquals(true, true);
	}

	// This confirms that our setup did what we expect. This should never fail.
	public function testSpeciesIsIndeedSpecies() {
		$this->assertInstanceOf('Species', $this->Species);
	}

	public function testShouldNotBeAbleToCreateSpeciesWithBlankName() {
		$this->assertFalse(
			$this->Species->save(
				array(
					'Species' => array('name' => '')
				)
			)
		);
		$this->assertEmpty($this->Species->id);
	}

	public function testShouldNotBeAbleToCreateDuplicates() {
		// We should be able to create the first fine.
		$this->assertNotEmpty(
			$this->Species->save(
				array(
					'Species' => array('name' => 'DuplicateName')
				)
			)
		);
		$this->assertNotEmpty($this->Species->id);

		// Call create, so we move onto a new species instance.
		// We don't want to be updating the existing species instace when we run save.
		$this->Species->create();
		// When we try and create a second, it should fail.
		$this->assertFalse(
			$this->Species->save(
				array(
					'Species' => array('name' => 'DuplicateName')
				)
			)
		);
	}

	public function testShouldBeAbleToCreateSpeciesWithName() {
		$this->assertNotEmpty(
			$this->Species->save(
				array(
					'Species' => array('name' => 'Cat')
				)
			)
		);
		$this->assertNotEmpty($this->Species->id);
	}

	public function testShouldBeAbleToCreateSpeciesWithWhiteSpace() {
		$this->assertNotEmpty(
			$this->Species->save(
				array(
					'Species' => array('name' => 'Evil Canary')
				)
			)
		);
		$this->assertNotEmpty($this->Species->id);
	}

	public function testShouldNotBeAbleToCreateSpeciesWithoutName() {
		$this->assertFalse(
			$this->Species->save(
				array(
					'Species' => array()
				)
			)
		);
		$this->assertEmpty($this->Species->id);
	}
	
}
