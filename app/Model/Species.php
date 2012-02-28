<?
class Species extends AppModel {
	public $name = 'Species';
	// A Species has many occurences.
	public $hasMany = 'Occurrence';

	public $validate = array(
		'name' => array(
			'rule' => 'alphaNumeric',
			'required' => true,                           // A name must be specified
			'allowEmpty' => false,                        // You can't specify an empty string
			'message' => 'Alphabets and numbers only',
		)
	);
}
