<?php
App::uses('AppModel', 'Model');
/**
 * Memorial Model
 *
 */
class Memorial extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'memorial';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Mem_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Mem_ID';

}
