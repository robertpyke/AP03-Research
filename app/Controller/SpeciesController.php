<?php
class SpeciesController extends AppController {
	public $name = 'Species';
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	/**
	 *
	 * GET /species/?
	 */
	public function index() {
		$this->set('title_for_layout', 'View Species');
		$this->set('species', $this->Species->find('all'));
	}

	/**
	 *
	 * GET/POST /species/add/?
	 */
	public function add() {
		$this->set('title_for_layout', 'Add Species');
		// If the user did a POST, process their input
		if ($this->request->is('post')) {
			if ($this->Species->save($this->request->data)) {
				$this->Session->setFlash('Your Species has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your Species.');
			}
		}
		// else fall through to add view renderer
	}
	
}
