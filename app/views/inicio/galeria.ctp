<?php
$_ts = 'Galería';

echo
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->link($html->image('gal/th_1.jpg',array('alt'=>'gal/th_1.jpg')),'/img/gal/1.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
			$html->link($html->image('gal/th_2.jpg',array('alt'=>'gal/th_2.jpg')),'/img/gal/2.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
			$html->link($html->image('gal/th_3.jpg',array('alt'=>'gal/th_3.jpg')),'/img/gal/3.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
			$html->link($html->image('gal/th_4.jpg',array('alt'=>'gal/th_4.jpg')),'/img/gal/4.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
			$html->link($html->image('gal/th_5.jpg',array('alt'=>'gal/th_5.jpg')),'/img/gal/5.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
			$html->link($html->image('gal/th_6.jpg',array('alt'=>'gal/th_6.jpg')),'/img/gal/6.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
			$html->link($html->image('gal/th_7.jpg',array('alt'=>'gal/th_7.jpg')),'/img/gal/7.jpg',array('class'=>'pulsembox galthumb','rel'=>'pbox')),
		'</div>',
	'</div>',
	$html->div('bubble hide',''),
/*
	$html->div('bubble hide',''),
	$html->div('bubble hide',''),
	$html->div('bubble hide',''),

*/
	$html->div('act',$html->image('galeria_1.jpg',array('alt'=>'galeria_1.jpg','class'=>'bg'))),
	$html->div('act',$html->image('galeria_2.jpg',array('alt'=>'galeria_1.jpg','class'=>'bg'))),
'';
?>
