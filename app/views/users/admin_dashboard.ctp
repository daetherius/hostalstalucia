<div class="welcome">
	<h1>¡Hola, <?=$sAdmin['nombre']?>!</h1>
	<h2>Has ingresado correctamente al panel de administración del sitio.</h2>
	<p>Consulta los catálogos en el lateral izquierdo para administrar el contenido de su sitio web.</p>
	<p class="hits"><?=$hits?></p>
	<p class="hitsLabel">Visitas | <?php echo $html->link('Reiniciar Contador',array('controller'=>'users','action'=>'reset','admin'=>true),null,'El contador se pondrá en ceros. ¿Está completamente seguro(a)?');?>
</div>