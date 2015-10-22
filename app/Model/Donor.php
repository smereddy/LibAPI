<?php
App::uses('AppModel', 'Model');
/**
 * Donor Model
 *
 */
class Donor extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Donor_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Donor_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Donor_ID' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
