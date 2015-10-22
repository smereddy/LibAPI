<?php
/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Trans_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Libraries_Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Items_Donated_Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Appeal_Appeal_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Donors_Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Trans_Amount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'Trans_Time_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'Trans_Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Transaction_Token' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Trans_ID', 'unique' => 1),
			'Transactions_Appeal_FK' => array('column' => 'Appeal_Appeal_ID', 'unique' => 0),
			'Transactions_Donors_FK' => array('column' => 'Donors_Donor_ID', 'unique' => 0),
			'Transactions_Items_Donated_FK' => array('column' => 'Items_Donated_Item_ID', 'unique' => 0),
			'Transactions_Libraries_FK' => array('column' => 'Libraries_Library_ID', 'unique' => 0)
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
			'Trans_ID' => 1,
			'Libraries_Library_ID' => 1,
			'Items_Donated_Item_ID' => 1,
			'Appeal_Appeal_ID' => 1,
			'Donors_Donor_ID' => 1,
			'Trans_Amount' => 1,
			'Trans_Time_Date' => '2015-10-22',
			'Trans_Type' => 'Lorem ipsum dolor sit amet',
			'Transaction_Token' => 1,
			'Notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
