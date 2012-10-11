<?php
$_ts = 'Reservaciones';

echo
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$form->create('Reservation',array('id'=>'ContactForm','url'=>'/inicio/reservar')),
			$form->input('mail',array('div'=>'hide')),
			$html->div('subform'),
				$html->para('note','Datos Generales/General Data'),
				$form->input('llegada',array('label'=>'Llegada/Arrival')),
				$form->input('salida',array('label'=>'Salida/Departure')),
				$form->input('num_personas',array('label'=>'Personas/Persons','div'=>'col col33 alpha')),
				$form->input('hombres',array('label'=>'Hombres/Men','div'=>'col col33')),
				$form->input('mujeres',array('label'=>'Mujeres/Women','div'=>'col col33')),
				$form->input('tipo',array(
					'label'=>'Su reservación/Your Reservation',
					'options'=>array(
						'dormitorio'=>'Dormitorio/Dormitory',
						'privado'=>'Privado/Private',
						'semi-privado'=>'Semi Privado/Semi Private',
						'privado-big'=>'Privado para 4 o 6 personas/Private for 4 or 6 people',
						'dormitorio-damas'=>'Dormitorio para damas/Ladies Dormitory'
					)
				)),
				$html->para('note','Datos de quien reserva/Personal Data'),
				$form->input('nombre',array('label'=>'Nombre/First Name','div'=>'col col50 alpha')),
				$form->input('apellidos',array('label'=>'Apellidos/Last Name','div'=>'col col50')),
				$form->input('email',array('label'=>'E-mail','div'=>'col col50 alpha')),
				$form->input('ocupacion',array('label'=>'Ocupación/Job','div'=>'col col50')),
				$form->input('edad',array('label'=>'Edad/Age','div'=>'col col33 alpha')),
				$form->input('pais',array('label'=>'País/Country','div'=>'col col66')),
				$form->input('telefono',array('label'=>'Teléfono/Phone')),
				$form->submit('Enviar/Send'),
			'</div>',
			$form->end();
?>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HMPTWTNFSDMQQ">
<table>
<tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
	<option value="Dormitorio / Dormitory">Dormitorio / Dormitory$170.00 MXN</option>
	<option value="Semi Privados / Semi private">Semi Privados / Semi private$310.00 MXN</option>
	<option value="Privado / Private">Privado / Private$390.00 MXN</option>
	<option value="Hamacas / Hammocks">Hamacas / Hammocks$130.00 MXN</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="MXN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
		<?php
		echo '</div>',
	'</div>',

	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->para('strong','NOTA:'),
			$html->para(null,'Si desea, puede realizar sus reservaciones enviando un e-mail a nuestra gerencia o al siguiente correo electrónico:'),
			'<br/>',
			$html->para('strong','NOTE:'),
			$html->para(null,'Yo can make your reservations by sending an email to our management or to the following e-mail:'),
			'<br/>',
			$html->para('strong email',$util->ofuscar('reservaciones@hostalsantalucia.com')),
			'<br/>',
			'<br/>';
		echo '</div>',
	'</div>',
	
	$html->div('act',$html->image('reservaciones_1.jpg',array('alt'=>'reservaciones_1.jpg','class'=>'bg'))),
	$html->div('act',$html->image('reservaciones_2.jpg',array('alt'=>'reservaciones_2.jpg','class'=>'bg')));

$moo->ajaxform('ContactForm');
?>
