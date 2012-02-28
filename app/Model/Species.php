<?php

// File: app/Model/Species.rb
// Author: Robert Pyke

class Species extends AppModel {
	public $name = 'Species';

	// A Species has many occurrences.
	public $hasMany = 'Occurrence';

	// Specify validation for Species
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',    // Can't be empty
			'rule' => 'isUnique',    // Can't be duplicate (shouldn't have two species with same name)
			'required' => true,
			'allowEmpty' => false,
			'message' => 'This field cannot be left blank'
		)
	);
}
