<?php
// Fixture for testing Species
class SpeciesFixture extends CakeTestFixture {
	// Import model information from 'default' database.
	public $import = array(
		'model' => 'Species'
	);

	// Setup some dummy records
	public $records = array(
		array('id' => 1, 'name' => 'emu', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('id' => 2, 'name' => 'crow', 'created' => '2007-03-19 10:39:23', 'updated' => '2007-03-20 10:41:31')
	);
}
