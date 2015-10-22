<?php
App::uses('AppModel', 'Model');
/**
 * Library Model
 *
 */
class Library extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Library_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Library_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Library_ID' => array(
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
