<?php
class Reservation extends AppModel {
	var $name = 'Reservation';
	var $_schema = array(
		'llegada' =>array('type'=>'datetime'),
		'salida' =>array('type'=>'datetime'),
		'num_personas' =>array('type'=>'string', 'length'=>2),
		'hombres' =>array('type'=>'string', 'length'=>2),
		'mujeres' =>array('type'=>'string', 'length'=>2),
		'tipo' =>array('type'=>"enum('dormitorio','privado','semi-privado','privado-big','dormitorio-damas')"),
		'nombre' =>array('type'=>'string', 'length'=>100),
		'apellidos' =>array('type'=>'string', 'length'=>100),
		'ocupacion' =>array('type'=>'string', 'length'=>100),
		'edad' =>array('type'=>'string', 'length'=>3),
		'pais' =>array('type'=>'string', 'length'=>100),
		'email' =>array('type'=>'string', 'length'=>255),
		'telefono' =>array('type'=>'string', 'length'=>255)
	);
	var $labels = array(
		'llegada' =>'Llegada/Arrival',
		'salida' =>'Salida/Departure',
		'num_personas' =>'Personas/Persons',
		'hombres' =>'Hombres/Men',
		'mujeres' =>'Mujeres/Women',
		'tipo' =>'Tipo Habitación',
		'nombre' =>'Nombre/First Name',
		'apellidos' =>'Apellidos/Last Name',
		'ocupacion' =>'Ocupación/Job',
		'edad' =>'Edad/Age',
		'pais' =>'País/Country',
		'email' =>'E-mail',
		'telefono' =>'Teléfono/Phone'
	);

	var $skipValidation = true;
	var $useTable = false;
	var $validate = array(
		'nombre' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Escriba su nombre por favor.'
		),
		'mail' => array(
			'rule'=>'blank',
			'required' => true,
			'allowEmpty' => true,
			'message' => 'Non-Human.'
		),
		'email' => array(
			'format'=>array(
				'rule' => 'email',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Ingrese una dirección de correo válida.'
			),
			'vacio' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Este campo no puede quedar vacío.'
			)		
		)
	);
}
?>