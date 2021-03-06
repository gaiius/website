<?php
App::uses('AppModel', 'Model');
/**
 * Newse Model
 *
 * @property Categori $Categori
 */
class Newse extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'categori_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'isi_berita' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categori' => array(
			'className' => 'Categori',
			'foreignKey' => 'categori_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
