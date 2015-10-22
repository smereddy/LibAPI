<?php
App::uses('AppModel', 'Model');
/**
 * Appeal Model
 *
 */
class Appeal extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'appeal';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Appeal_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Appeal_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Appeal_ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
