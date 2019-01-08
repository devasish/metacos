<?php
App::uses('SubjectWqt', 'Model');

/**
 * SubjectWqt Test Case
 *
 */
class SubjectWqtTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_wqt',
		'app.job',
		'app.user',
		'app.transfer',
		'app.subject_material_test',
		'app.subject_production_test',
		'app.subject_wp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectWqt = ClassRegistry::init('SubjectWqt');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectWqt);

		parent::tearDown();
	}

}
