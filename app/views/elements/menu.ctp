<?php
echo
	$html->tag('ul',null,array('id'=>'menu')),
		$html->tag('li',$html->link($html->tag('span',__('Mérida',true)),array('controller'=>'inicio','action'=>'index','merida')),'mMerida'),
		$html->tag('li',$html->link($html->tag('span',__('Servicios',true)),array('controller'=>'inicio','action'=>'index','servicios')),'mServicios'),
		$html->tag('li',$html->link($html->tag('span',__('Cuartos',true)),array('controller'=>'inicio','action'=>'index','cuartos')),'mCuartos'),
		$html->tag('li',$html->link($html->tag('span',__('Guest Book',true)),array('controller'=>'inicio','action'=>'index','guestbook')),'mBooking'),
		$html->tag('li',$html->link($html->tag('span',__('Galería',true)),array('controller'=>'inicio','action'=>'index','galeria')),'mGaleria'),
		$html->tag('li',$html->link($html->tag('span',__('Promos',true)),array('controller'=>'inicio','action'=>'index','promos')),'mPromos'),
		$html->tag('li',$html->link($html->tag('span',__('Para Reservar',true)),array('controller'=>'inicio','action'=>'index','reservaciones')),'mReservaciones'),
	'</ul>';
	$moo->buffer('
		var menu_items = $$("#menu > li");
		menu_items.each(function(el){
			el.store("wfx",new Fx.Tween(el,{
				property:"width",
				transition:"quad:in:out",
				duration:360,
				unit:"%",
				link:"cancel"
			})).setStyle("width","11%");
			el.addEvents({
				mouseenter:function(){
					menu_items.each(function(_el){ _el.retrieve("wfx").start("10"); });
					this.retrieve("wfx").start("17");
				}.bind(el)
			});
		});
		$("menu").addEvent("mouseleave",function(){ this.getElements("li").each(function(el){ el.retrieve("wfx").start("11"); }); });
	');
?>