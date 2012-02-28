<?php
class Species extends AppModel {
	public $name = 'Species';

	// A Species has many occurences.
	public $hasMany = 'Occurrence';

	// Specify validation for Species
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => 'This field cannot be left blank'
		)
	);
}
