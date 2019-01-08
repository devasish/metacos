<?php
/**
 * JobFixture
 *
 */
class JobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'barcode' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'client' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_person' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fax' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_client' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_att_to' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_position' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_fax' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_sample_arrived_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'invoice_client' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_contact_person' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_fax' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 63, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'barcode' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'client' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'contact_person' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'report_client' => 'Lorem ipsum dolor sit amet',
			'report_address' => 'Lorem ipsum dolor sit amet',
			'report_att_to' => 'Lorem ipsum dolor sit amet',
			'report_phone' => 'Lorem ipsum dolor sit amet',
			'report_position' => 'Lorem ipsum dolor sit amet',
			'report_fax' => 'Lorem ipsum dolor sit amet',
			'report_email' => 'Lorem ipsum dolor sit amet',
			'report_sample_arrived_date' => '2018-12-20 12:14:51',
			'invoice_client' => 'Lorem ipsum dolor sit amet',
			'invoice_address' => 'Lorem ipsum dolor sit amet',
			'invoice_contact_person' => 'Lorem ipsum dolor sit amet',
			'invoice_phone' => 'Lorem ipsum dolor sit amet',
			'invoice_email' => 'Lorem ipsum dolor sit amet',
			'invoice_fax' => 'Lorem ipsum dolor sit amet',
			'created' => '2018-12-20 12:14:51',
			'modified' => '2018-12-20 12:14:51'
		),
	);

}
