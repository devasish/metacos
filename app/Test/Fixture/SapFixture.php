<?php
/**
 * SapFixture
 *
 */
class SapFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'sapcode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 31, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'net_wt' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'gross_wt' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'empty_ctn_wt' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'cbm' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'ctn_per_pallet' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4, 'unsigned' => false),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'foreign key to customers'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'last_edited_by' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'sapcode' => array('column' => 'sapcode', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'sapcode' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'net_wt' => 1,
			'gross_wt' => 1,
			'empty_ctn_wt' => 1,
			'cbm' => 1,
			'ctn_per_pallet' => 1,
			'created' => '2018-12-20 11:19:52',
			'modified' => '2018-12-20 11:19:52',
			'status' => 1,
			'customer_id' => 1,
			'user_id' => 1,
			'last_edited_by' => 1
		),
	);

}
