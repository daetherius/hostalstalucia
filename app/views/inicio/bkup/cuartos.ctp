<?php
$_ts = 'Cuartos';

echo
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->tag('ul'),
				$html->tag('li','Disponibilidad de cocina equipada.'),
				$html->tag('li','Hamacas para descansar y leer en el jardín.'),
				$html->tag('li','Dos cómodos patios tipo parque.'),
				$html->tag('li','Televisión, DVD, CD, agua e internet gratis.'),
				$html->tag('li','Regaderas con agua caliente y baños muy limpios.'),
				$html->tag('li','Asador para hacer BBQ y Carnitas en el jardín.'),
			'</ul>',
		'</div>',
	'</div>',
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->tag('ul'),
				$html->tag('li','Disponibilidad de cocina equipada.'),
				$html->tag('li','Hamacas para descansar y leer en el jardín.'),
				$html->tag('li','Dos cómodos patios tipo parque.'),
				$html->tag('li','Televisión, DVD, CD, agua e internet gratis.'),
				$html->tag('li','Regaderas con agua caliente y baños muy limpios.'),
				$html->tag('li','Asador para hacer BBQ y Carnitas en el jardín.'),
			'</ul>',
		'</div>',
	'</div>',

	$html->div('act',$html->image('cuartos_1.jpg',array('alt'=>'cuartos_1.jpg','class'=>'bg'))),
	$html->div('act',$html->image('cuartos_2.jpg',array('alt'=>'cuartos_2.jpg','class'=>'bg')));
?>
