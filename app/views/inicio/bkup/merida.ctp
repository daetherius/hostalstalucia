<?php
$_ts = 'Mérida';

echo
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->para(null,'En la actualidad Mérida combina lo antiguo y lo moderno, lo que da por resultado una de las ciudades más bellas de la Républica Mexicana, al caminar por sus calles y convivir con cualquiera de su cerca de 700,000 habitantes vivira, una experiencia indudable que seguramente querrá, repetir.'),
			$html->para(null,'Mérida es un excelente punto de partida para visitar los principales sitios arqueologicos, ciudades, pueblos coloniales y atracciones naturales. Cuando vengas a esta hermosa ciudad no te olvides de conocer la plaza grande, la casa de Montejo o del Conquistador, la Catedral de San Idelfonso, el Palacio de Gobierno, la calle 60 con sus multiples encantos, el parque y la Iglesia de Santa Lucia, el Paseo de Montejo y por supuesto el Hostal Santa Lucia donde te brindamos el mejor de los tratos.'),
		'</div>',
	'</div>',

	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->para(null,'En su fundación, Mérida fue diseñada con calles y plazas trazadas simetricamente a semejanza de las viejas ciudades españolas; En el centro se construyo la plaza mayor (conocida actualmente como plaza grande) y a sus costados la catedral de San Idelfonso y la casa Montejo, joya de arte plateresco.'),
			$html->para(null,'Al poniente de la ciudad se edificaron dos barrios para indigena, el de Santiago y el de Santa Catarina; al oriente, el de San Cristobal, para indios del altiplano; al norte el barrio de Santa Lucia destinado para personas de color y mulatos (Zona en la cual se encuentra ubicado el hostal Sta. Lucia).'),
			$html->para(null,'Posteriormente, conforme la ciudad se fue expandiendo, perdió su sentido geometrico y comenzaron a construirse otros barrios asi como 7 puertas que delimitaban la ciudad y la separaban de los barrios indios; en la actualidad solo se conservan tres puertas: el de San Juan al sur de la ciudad, el de Dragones y del Puente al Oriente.'),
		'</div>',
	'</div>',

	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->para(null,'Mérida, capital del estado de Yucatán, se localiza al noroeste de la peninsula de Yucatán y esta ubicada a 300 kilometros de la ciudad de Campeche y a 320 kilometros de Cancún.'),
			$html->para(null,'Fue fundada el 6 de Enero por el español Francisco de Montejo en el lugar donde anteriormente tenian los Mayas una ciudad llamada T\'ho, misma que fue destruida y cuyas piedras fueron utilizadas para construir la Catedral de San Idelfonso (1561-1599) que es la más antigua del continente americano.'),			
		'</div>',
	'</div>',

	$html->div('act',$html->image('merida_1.jpg',array('alt'=>'merida_1.jpg','class'=>'bg'))),
	$html->div('act',$html->image('merida_2.jpg',array('alt'=>'merida_2.jpg','class'=>'bg'))),
	$html->div('act',$html->image('merida_3.jpg',array('alt'=>'merida_3.jpg','class'=>'bg')));
?>