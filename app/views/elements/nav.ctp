<?php
if($this->passedArgs){
	echo $html->div('nav'),
		$html->link('Menú',array('controller'=>'inicio','action'=>'index'),array('id'=>'all','title'=>'Menú principal')),
		$html->link('Arriba','#top',array('id'=>'go_top','title'=>'Volver a arriba')),
	'</div>';
}
?>