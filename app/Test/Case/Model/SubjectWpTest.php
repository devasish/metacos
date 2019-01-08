<?php
App::uses('SubjectWp', 'Model');

/**
 * SubjectWp Test Case
 *
 */
class SubjectWpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_wp',
		'app.job',
		'app.user',
		'app.transfer',
		'app.subject_material_test',
		'app.subject_production_test',
		'app.subject_wqt'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectWp = ClassRegistry::init('SubjectWp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectWp);

		parent::tearDown();
	}

}
