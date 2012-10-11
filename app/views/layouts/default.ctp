<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" itemscope itemtype="http://schema.org/<?=ucfirst($og_for_layout['itemtype'])?>">
<head>
<title><?=$sitename_for_layout.($title_for_layout ? ' | '.$title_for_layout : '')?></title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$description_for_layout?>" />
<meta name="keywords" content="<?=$keywords_for_layout?>" />
<meta name="Title" content="<?=$sitename_for_layout?>" />
<meta name="Author" content="Pulsem" />
<meta name="Generator" content="daetherius" />
<meta name="Language" content="Spanish" /> 
<meta name="Robots" content="Index" />

<meta property="og:title" content="<?=$og_for_layout['title']?>" />
<meta property="og:description" content="<?=$og_for_layout['description']?>" />
<meta property="og:type" content="<?=$og_for_layout['type']?>" />
<meta property="og:url" content="<?=$og_for_layout['url']?>" />
<meta property="og:image" content="<?=$og_for_layout['image']?>" />
<meta property="og:site_name" content="<?=$og_for_layout['site_name']?>" />

<meta itemprop="name" content="<?=$og_for_layout['title']?>">
<meta itemprop="description" content="<?=$og_for_layout['description']?>">
<meta itemprop="image" content="<?=$og_for_layout['image']?>">

<?=$html->css(array('generic','main','pulsembox'))?> 
</head>
<?php
echo
	$html->tag('body',null,'c_'.$this->params['controller'].' a_'.$this->params['action'].' sub_'.$this->passedArgs[0]),
		//$html->div(null,null,array('id'=>'wrapper')),
			$this->element('nav'),
			$html->div('sidebar'),
				$html->div('pad'),
					$html->div('content'),
						$html->tag('h1',$html->link($html->image('logo.png',array('alt'=>'logo.png')),'/',array('title'=>$sitename_for_layout)),array('id'=>'logo')),
						$html->tag('h2','Hostal Santa Lucía','title'),

						/**** TEXTO INICIO **********/

						$html->para(null,'¡Gracias por su Preferencia!'),
						$html->para(null,'En el HOSTAL SANTA LUCIA contaras con Un agradable ambiente al puro estilo colonial Mexicano Podrás disfrutar las clases de salsa, Español, parrillada BBQ y mas actividades que realizamos en el transcurso  de la noche en un atmosfera rustica con una buena cerveza y amigos.  Happy Hours de 7 a 11 pm. La limpieza y la excelente calidez en nuestro trato harán que te sientas como en casa y tu estancia en Mérida será inolvidable.'),
						$html->para(null,$html->link('Haz tu cotización de grupos',array('controller'=>'inicio','action'=>'index','reservaciones'),array('class'=>''))),

						/****************************/
						
						$this->element('latest_updates'),
						$html->para(null,'Calle 55 #512 entre 62 y 64 Santa Lucia Centro, Mérida, Yucatán C.P. 97000 +52 (999) 928-90-70'),
						$html->para('languages',null),
							$html->link($html->image('english.png',array('alt'=>'English')),'http://eng.'.Configure::read('Site.domain'),array('class'=>'hostelling','title'=>'English')),
							$html->link($html->image('french.png',array('alt'=>'Français')),'http://fra.'.Configure::read('Site.domain'),array('class'=>'hostelling','title'=>'Français')),
						'</p>',
						$html->link('Skype: SantaLuciamerida','skype:SantaLuciamerida',array('class'=>'skype')),
						$html->para('legend digiart','Desarrollado por Grupo Digiart &copy; '.date('Y').'. Todos los derechos reservados.'),
						/*
						$html->para('legend','Conoce nuestro '.$html->link('Mapa de Sitio',array('controller'=>'inicio','action'=>'mapa')).' y nuestras '.$html->link('Políticas de Privacidad',array('controller'=>'inicio','action'=>'tos')).'.'),
						*/
					'</div>',
				'</div>',
			'</div>',
			$this->element('menu'),
			$html->div('scene',$html->tag('a','',array('name'=>'top')).$content_for_layout),
		//'</div>',
		$html->script(array('moo13','moo13m','utils','pulsembox','mousenav')),
		$scripts_for_layout,
		$moo->writeBuffer(array('onDomReady'=>false)),
		//$this->element('gfont',array('fonts'=>array('Cantarell','Droid+Serif'))),
	'';
?>
<script type="text/javascript">
/* G+ */ window.___gcfg = {lang: "es-419"};(function(){var po=document.createElement("script");po.type="text/javascript";po.async=true;po.src="https://apis.google.com/js/plusone.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po,s);})();
/* Analytics */ var _gaq=[["_setAccount","UA-24153801-1"],["_trackPageview"]];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
</body></html>