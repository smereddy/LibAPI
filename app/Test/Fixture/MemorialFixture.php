<?php
/**
 * MemorialFixture
 *
 */
class MemorialFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'memorial';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Mem_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Libraries_Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Donors_Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Items_Donated_Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'Party_Memorialized' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Desciption' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Memorial_Inscription' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Mem_ID', 'unique' => 1),
			'Memorial__IDX' => array('column' => 'Items_Donated_Item_ID', 'unique' => 1),
			'Memorial_Donors_FK' => array('column' => 'Donors_Donor_ID', 'unique' => 0),
			'Memorial_Libraries_FK' => array('column' => 'Libraries_Library_ID', 'unique' => 0)
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
			'Mem_ID' => 1,
			'Libraries_Library_ID' => 1,
			'Donors_Donor_ID' => 1,
			'Items_Donated_Item_ID' => 1,
			'Party_Memorialized' => 'Lorem ipsum dolor sit ame',
			'Desciption' => 'Lorem ipsum dolor sit amet',
			'Memorial_Inscription' => 'Lorem ipsum dolor sit amet'
		),
	);

}
