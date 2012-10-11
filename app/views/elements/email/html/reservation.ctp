<div style="padding:15px;border:#CCC solid 1px;margin:0;margin-top:10px;">
	<h1 style="font-weight:normal;font-size:24px;margin:0;margin-bottom:18px;color:#444">Solicitud de reservación</h1>
	<h2 style="font-weight:normal;font-size:18px;margin:0;margin-bottom:10px;color:#666">Datos Generales</h2>
	<?php
	$tipos = array(
		'dormitorio'=>'Dormitorio/Dormitory',
		'privado'=>'Privado/Private',
		'semi-privado'=>'Semi Privado/Semi Private',
		'privado-big'=>'Privado para 4 o 6 personas/Private for 4 or 6 people',
		'dormitorio-damas'=>'Dormitorio para damas/Ladies Dormitory'
	);

	echo
		$html->tag('p','<strong>Llegada: </strong>'.$llegada['day'].'-'.$llegada['month'].'-'.$llegada['year'].' '.$llegada['hour'].':'.$llegada['min'].' '.$llegada['meridian']),
		$html->tag('p','<strong>Salida: </strong>'.$salida['day'].'-'.$salida['month'].'-'.$salida['year'].' '.$salida['hour'].':'.$salida['min'].' '.$salida['meridian']),
		$html->tag('p','<strong>Personas: </strong>'.$num_personas),
		$html->tag('p','<strong>Hombres: </strong>'.$hombres),
		$html->tag('p','<strong>Mujeres: </strong>'.$mujeres),
		$html->tag('p','<strong>Tipo: </strong>'.$tipos[$tipo]);
	?>
	<h2 style="font-weight:normal;font-size:18px;margin:0;margin-bottom:10px;margin-top:18px;color:#666">Datos Personales</h2>
	<?php
	echo
		$html->tag('p','<strong>Nombre: </strong>'.$nombre),
		$html->tag('p','<strong>Apellidos: </strong>'.$apellidos),
		$html->tag('p','<strong>Ocupación: </strong>'.$ocupacion),
		$html->tag('p','<strong>Edad: </strong>'.$edad),
		$html->tag('p','<strong>País: </strong>'.$pais),
		$html->tag('p','<strong>Email: </strong>'.$email),
		$html->tag('p','<strong>Teléfono: </strong>'.$telefono);


	?>
</div>