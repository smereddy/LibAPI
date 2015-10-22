<?php
/**
 * AppealFixture
 *
 */
class AppealFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'appeal';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Appeal_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Appeal_Description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Start_Time_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'End_Time_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'Appeal_Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Appeal_ID', 'unique' => 1)
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
			'Appeal_ID' => 1,
			'Appeal_Description' => 'Lorem ipsum dolor sit amet',
			'Start_Time_Date' => '2015-10-22',
			'End_Time_Date' => '2015-10-22',
			'Appeal_Type' => 'Lorem ipsum dolor sit ame'
		),
	);

}
