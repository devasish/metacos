<?php
App::uses('Sap', 'Model');

/**
 * Sap Test Case
 *
 */
class SapTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sap',
		'app.customer',
		'app.user',
		'app.transfer',
		'app.pallet_checklist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sap = ClassRegistry::init('Sap');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sap);

		parent::tearDown();
	}

}
