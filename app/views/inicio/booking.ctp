<?php
	echo
		$html->div('act'),
			$html->image('booking_1.jpg',array('alt'=>'booking_1.jpg','class'=>'bg')),
			$html->div('bubble'),

			# -----------------

			$html->div('comment_list'),
				$html->tag('a','',array('name'=>'comments')),
				$html->div('hide','',array('id'=>'comment_updater'));
				
				$odd = false;
				foreach($comments as $comment){
					echo $this->element('comment',array('data'=>$comment['Comment'],'odd'=>$odd));
					$odd = !$odd;
				}
				
			echo '</div>',
			
			# -----------------
			
			'</div>',
		'</div>',
		$html->div('act'),
			$html->image('booking_2.jpg',array('alt'=>'booking_2.jpg','class'=>'bg')),
			$html->div('bubble');

			# -----------------

				if($this->Session->check('form_errors.Comment')){
					$this->Form->validationErrors = array('Comment'=>$this->Session->read('form_errors.Comment.errors'));
					$this->Session->delete('form_errors.Comment');
				}

				echo
					$html->div(null,null,array('id'=>'comments')),
						$html->div('title title2','Deja tu comentario'),
						$form->create('Comment',array('action'=>'publicar','id'=>'commentForm')),
							$html->div('subform'),
								$html->div('comment_texts'),
									$form->input('mail',array('div'=>'hide')),
									$form->input('autor',array('label'=>'Nombre:')),
									$form->input('email',array('label'=>'Email:')),
									$form->submit('Enviar/Send'),
								'</div>',
								$form->input('descripcion',array('label'=>'Comentario:','div'=>'comment_textarea')),
							'</div>',
							
						$form->end();

			# -----------------

			echo '</div>',
		'</div>';
?>