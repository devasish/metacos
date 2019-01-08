<?php
App::uses('SubjectProductionTest', 'Model');

/**
 * SubjectProductionTest Test Case
 *
 */
class SubjectProductionTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_production_test',
		'app.job',
		'app.user',
		'app.transfer',
		'app.subject_material_test',
		'app.subject_wp',
		'app.subject_wqt'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectProductionTest = ClassRegistry::init('SubjectProductionTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectProductionTest);

		parent::tearDown();
	}

}
