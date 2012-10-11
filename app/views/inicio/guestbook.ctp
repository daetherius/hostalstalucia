<?php
$_ts = 'Guestbook';

echo
	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper'),
			$html->div('comment_list'),

				$html->para(null,'Hola! Estoy encantadísima con el lugar, es la primera vez que me quedo en un hostal, y afortunadamente ah sido una excelente experiencia, todos los que trabajan aquí han sido muy amables y se nota que les gusta lo que hacen, cuando regrese a Mérida, seguramente regresare aquí, Sigan así.'),
				$html->para('commenter','15.01.2012 - TANIA - México. DF.'),
				          
				$html->para(null,'Un lugar súper bonito y Acogedor, y son muy Hospitalarios.'),
				$html->para('commenter','22.01.2011 - Ivonne y Gabo - Guadalajara'),
				                                                                   
				$html->para(null,'Nell’ hostal santa lucia mi sentivo a casa, il clima e caloroso, lo staff sempre a disposizione e i prezzi sono molto accessibili.<br/>
				L’ostello e pulito, ha due ampi spazi aperti con palme fiori e amache e si trova a cinque minuti a piedi dal centro.<br/>
				La cucina e ben attrezzata, l’acqua e gratuita e c’e anche un computer con wii fii a disposizione degli ospiti!! Mi sono divertita un sacco, a prestoooo!!!!'),
				$html->para('commenter','5.03.2012'),

				$html->para(null,'COME STAY HERE!<br/>
				Nice Pople, not expensive, air conditioning at night so it´s easy to Sleep. Thank you.'),
				$html->para('commenter','15.02.2012 - Lydia - San Francisco, CA.'),

				$html->para(null,'Santa Lucia<br/>
				Muchísimas gracias por todo la gente que trabaja aquí son muy amables. Me encanta Mérida anden en bicicleta la bici ruta esta muy bien.
				Sonreír te Cambia la vida…'),
				$html->para('commenter','30.04.2012 - Maria - California.'),

				$html->para(null,'HOLA!!!<br/>
				Gracias por la Hospitalidad de los chicos de Brasil…<br/>
				MARIANA, CLARA, ADRIANA, LEO, LUCAS, JOAO.'),
				$html->para('commenter','22.02.2012'),

				$html->para(null,'Thanks for all your sweet..'),
				$html->para('commenter','26.03.2012 - Paula - NY'),

				$html->para(null,'Thank you for your Kindness.<br/>
				I really apriciate it.. Muchas Gracias'),
				$html->para('commenter','05.05.2012 - TOMOAKI KIMARA'),
				         
				$html->para(null,'HOLA<br/>
				I HAD A GREAT STAY HERE, I WILL MISS MERIDA'),
				$html->para('commenter','21.3.11 - MATT'),

				$html->para(null,'Merveilleuse Atmosphère ici Naus Reviendrons.'),
				$html->para('commenter','05.04.2012 - J&L'),

				$html->para(null,'Año tras años, ya es como nuestra casa, bien Ubicado, bonito y Tranquilo. Nos vemos el Próximo años'),
				$html->para('commenter','11.06.2011 - Angie y Alfredo'),
				                                                              
				$html->para(null,'El trato fue casi Familiar. El Personal es muy amable y atento, siempre dispueto a ayudar y orientar cuando hace falta.'),
				$html->para('commenter','Muchas Gracias RB, ST.'),

				$html->para(null,'Mucha amabilidad y un Exelente “Desayuno Continental”, Muchas Gracias y nos estamos Viendo.'),
				$html->para('commenter','Gonzalo - México DF.'),

				$html->para(null,'Merci bcp Pour iáccueil et le Service!<br/>
				Sans oublier le dèjainer!!   Muchas Gracias Daniel”bubu”'),
				$html->para('commenter','18.05.2012 - Switzarland,NE'),

				$html->para(null,'Grazie di tutto GIORGIO, Gracie per la tua solarita e gentilezza sono stati 2 goirni piacevolissmi qui a Merida, siamo stati dannero bene e porteremo con noi un bel ricordo di questa aventura messicana.. Alla prossima con afectto.'),
				$html->para('commenter','24.04.2012 - LAR & ANDY - Italia'),

				$html->para(null,'Had a great time here, Fantastic start to a good Day! CHEERS'),
				$html->para('commenter','6.03.2011 - ALEXXA - NH USA'),

			'</div>',
		'</div>',
	'</div>',

	$html->div('bubble hide'),
	'</div>',

	$html->div('bubble'),
		$html->div('title title1',$_ts),
		$html->div('wrapper');

			if($this->Session->check('form_errors.Contact')){
				$this->Form->validationErrors = array('Contact'=>$this->Session->read('form_errors.Contact.errors'));
				$this->Session->delete('form_errors.Contact');
			}

		echo
			$html->div(null,null,array('id'=>'comments')),
				$html->div('title title3','Deja tu comentario'),
				$form->create('Contact',array('url'=>'/inicio/enviar','id'=>'commentForm')),
					$html->div('subform'),
						$form->input('mail',array('div'=>'hide')),
						$form->input('nombre',array('label'=>'Nombre:')),
						$form->input('email',array('label'=>'Email:')),
						$form->input('mensaje',array('label'=>'Comentario:','div'=>'comment_textarea')),
						$form->submit('Enviar/Send'),
					'</div>',
					
				$form->end(),
			'</div>',
		'</div>',
	'</div>',
	$moo->ajaxform('commentForm'),

	$html->div('act',$html->image('guestbook_1.jpg',array('alt'=>'guestbook_1.jpg','class'=>'bg'))),
	$html->div('act',$html->image('guestbook_2.jpg',array('alt'=>'guestbook_2.jpg','class'=>'bg'))),
	$html->div('act',$html->image('guestbook_3.jpg',array('alt'=>'guestbook_3.jpg','class'=>'bg')));
?>