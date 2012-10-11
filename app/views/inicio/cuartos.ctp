<?php
$_ts = 'Cuartos';

echo
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->tag('ul'),
				$html->tag('li','Dormitorios para caballeros.'),
				$html->tag('li','Dormitorios para damas.'),
				$html->tag('li','Semi-Privados con Baño compartido.'),
				$html->tag('li','Privado con baño compartido de 4 a 6 personas.'),
				$html->tag('li','Privados.'),
				$html->tag('li','Hamacas.'),
			'</ul>',
			'<br/>',
			$html->para(null,'Todos los dormitorios cuantas con A/C & WI-FI.'),
		'</div>',
	'</div>',


	$html->div('bubble hide',''),
	$html->div('bubble hide',''),

	$html->div('act',$html->image('cuartos_1.jpg',array('alt'=>'cuartos_1.jpg','class'=>'bg'))),
	$html->div('act',$html->image('cuartos_2.jpg',array('alt'=>'cuartos_2.jpg','class'=>'bg'))),
	$html->div('act',$html->image('cuartos_3.jpg',array('alt'=>'cuartos_3.jpg','class'=>'bg'))),
'';
?>
