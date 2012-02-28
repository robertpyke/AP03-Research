<?php

// File: app/Model/Occurrence.php
// Author: Robert Pyke

class Occurrence extends AppModel {
	public $name = 'Occurrence';

	// Specify validation for Occurrence
	// See API: http://book.cakephp.org/2.0/en/models/data-validation.html
	public $validate = array(

		// NOTE:
		// From the Cake PHP Book:
		// When using multiple rules per field the ‘required’ and ‘allowEmpty’ keys need to be used only once in the first rule.
		'latitude' => array(
			'less or equal 90' => array(
				'rule' => array('comparison', 'less or equal', 90),
				'message' => 'This field must be a number between -90 to 90 (inclusive)',
				'required' => true,
				'allowEmpty' => false,
			),
			'greater or equal -90' => array(
				'rule' => array('comparison', 'greater or equal', -90),
				'message' => 'This field must be a number between -90 to 90 (inclusive)',
			),
		),
		'longitude' => array(
			'less or equal 180' => array(
				'rule' => array('comparison', 'less or equal', 180),
				'required' => true,
				'allowEmpty' => false,
				'message' => 'This field must be a number between -180 to 180 (inclusive)',
			),
			'greater or equal -180' => array(
				'rule' => array('comparison', 'greater or equal', -180),
				'message' => 'This field must be a number between -180 to 180 (inclusive)',
			),
		)
	);

}
