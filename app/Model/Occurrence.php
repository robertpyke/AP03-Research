<?php

// File: app/Model/Occurrence.php
// Author: Robert Pyke

class Occurrence extends AppModel {
	public $name = 'Occurrence';

	// Specify validation for Occurrence
	public $validate = array(
		// The range validation rule seems a bit stupid.
		// It is non inclusive, but it is non-inclusive to the whole number.
		// Note sure what I mean, read on...
		// So the range -91 to 91 is actually -90 to 90 inclusive.
		// The following range (-91, 91) will accept anything between -90 and 90 (including -89.9999 and 89.999).
		// It won't accept -90.001 or 90.01.
		'latitude' => array(
			'rule' => array('range', -91, 91)
			'required' => true,
			'allowEmpty' => false,
			'message' => 'This field must be a number between -90 to 90 (inclusive)'
		),
		'longitude' => array(
			'rule' => array('range', -181, 181)
			'required' => true,
			'allowEmpty' => false,
			'message' => 'This field must be a number between -180 to 180 (inclusive)'
		)
	);

}
