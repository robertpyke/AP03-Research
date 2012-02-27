<?php
class SpeciesController extends AppController {
	public $name = 'Species';
	public $helpers = array('Html', 'Form');

	/**
	 *
	 * GET /species/
	 */
	public function index() {
		$this->set('species', $this->Species->find('all'));
	}
	
}
