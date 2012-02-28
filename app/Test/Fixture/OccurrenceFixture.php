<?php
// Fixture for testing Occurrence
class OccurrenceFixture extends CakeTestFixture {
	// Import model information from 'default' database.
	public $import = array(
		'model' => 'Occurrence'
	);

	// Setup some dummy records
	public $records = array(
		array('id' => 1, 'latitude' => '12.101', 'longitude' => '33.21',   'created' => '2007-03-18 10:39:23', 'modified' => '2007-03-18 10:41:31'),
		array('id' => 2, 'latitude' => '32.111', 'longitude' => '45.2122', 'created' => '2007-03-19 10:39:23', 'modified' => '2007-03-20 10:41:31')
	);
}
