<?php
#Router::connect('/:lang/:prefix/:controller/:action/*',array('lang'=>null,'prefix'=>null,'controller'=>'inicio','action'=>'index'),array('lang' => '[a-z]{3}','prefix'=>'admin|member'));
$regex = array(
	/*
	'pass'=>array('id'),
	'sub'=>'[a-zA-Z0-9\-]+|^$',
	'id'=>'[0-9]+_[a-zA-Z0-9\-]+'
	*/
	//'category'=>'[0-9]+_[a-zA-Z0-9\-]+|^$',
);

Router::connect('/servicios',array('controller'=>'inicio','action'=>'index','servicios','lang'=>'esp'),$regex);
Router::connect('/merida',array('controller'=>'inicio','action'=>'index','merida','lang'=>'esp'),$regex);
Router::connect('/guestbook',array('controller'=>'inicio','action'=>'index','guestbook','lang'=>'esp'),$regex);
Router::connect('/cuartos',array('controller'=>'inicio','action'=>'index','cuartos','lang'=>'esp'),$regex);
Router::connect('/galeria',array('controller'=>'inicio','action'=>'index','galeria','lang'=>'esp'),$regex);
Router::connect('/promos',array('controller'=>'inicio','action'=>'index','promos','lang'=>'esp'),$regex);
Router::connect('/reservaciones',array('controller'=>'inicio','action'=>'index','reservaciones','lang'=>'esp'),$regex);


Router::connect('/eng/servicios',array('controller'=>'inicio','action'=>'index','servicios','lang'=>'eng'),$regex);
Router::connect('/eng/merida',array('controller'=>'inicio','action'=>'index','merida','lang'=>'eng'),$regex);
Router::connect('/eng/guestbook',array('controller'=>'inicio','action'=>'index','guestbook','lang'=>'eng'),$regex);
Router::connect('/eng/cuartos',array('controller'=>'inicio','action'=>'index','cuartos','lang'=>'eng'),$regex);
Router::connect('/eng/galeria',array('controller'=>'inicio','action'=>'index','galeria','lang'=>'eng'),$regex);
Router::connect('/eng/promos',array('controller'=>'inicio','action'=>'index','promos','lang'=>'eng'),$regex);
Router::connect('/eng/reservaciones',array('controller'=>'inicio','action'=>'index','reservaciones','lang'=>'eng'),$regex);


foreach(Configure::read('Modules') as $controller => $mod){
	$alias = $mod['route'];
	Router::connect('/'.$alias,array('controller'=>$controller,'action'=>'index'));
	Router::connect('/'.$alias.'/:id',array('controller'=>$controller,'action'=>'ver'),$regex);
	Router::connect('/'.$alias.'/:action/*',array('controller'=>$controller,'action'=>'index'),$regex);
	Router::connect('/admin/'.$alias,array('controller'=>$controller,'action'=>'index','admin'=>1));
	Router::connect('/admin/'.$alias.'/:action/*',array('controller'=>$controller,'action'=>':action','admin'=>1));
}

Router::connect('/',array('controller'=>'inicio','action'=>'index','lang'=>'esp'));
Router::connect('/eng',array('controller'=>'inicio','action'=>'index','lang'=>'eng'));
Router::connect('/registro',array('controller'=>'members','action'=>'registro'));
Router::connect('/login',array('controller'=>'members','action'=>'login'));
Router::connect('/logout',array('controller'=>'members','action'=>'logout'));

Router::connect('/panel', array('controller' => 'users', 'action' => 'dashboard','admin'=>1));
Router::connect('/panel/logout',array('controller'=>'users','action'=>'logout','admin'=>1));
Router::connect('/panel/login',array('controller'=>'users','action'=>'login','admin'=>1));

Router::connectNamed(array('msg','page','limit','activo','tipo','favorito','detalle'),array('default'=>true));
?>