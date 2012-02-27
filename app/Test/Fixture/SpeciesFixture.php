<?php
class SpeciesFixture extends CakeTestFixture {
	public $useDbConfig = 'test';
	public $fields = array(
		'id'   => array('type' => 'integer', 'key' -> 'primary'),
		'name' => array('type' => 'string',  'length' -> 255, 'null' => false),
		'created' => 'datetime',
		'updated' => 'datetime'
	);
	public $records = array(
		array('id' => 1, 'name' => 'emu', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('id' => 2, 'name' => 'crow', 'created' => '2007-03-19 10:39:23', 'updated' => '2007-03-20 10:41:31')
	);
}
