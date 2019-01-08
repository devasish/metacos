<?php
App::uses('SubjectMaterialTest', 'Model');

/**
 * SubjectMaterialTest Test Case
 *
 */
class SubjectMaterialTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_material_test',
		'app.job',
		'app.user',
		'app.transfer',
		'app.subject_production_test',
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
		$this->SubjectMaterialTest = ClassRegistry::init('SubjectMaterialTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectMaterialTest);

		parent::tearDown();
	}

}
