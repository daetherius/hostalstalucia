<?php
App::import('Controller','_base/My');
class InicioController extends MyController {
	var $name = 'Inicio';
	var $uses = array('Contact','Reservation');
	var $components = array('Email');

	function index($section = false){
		if($section){
			if($section == 'reservaciones'){
				$this->data['Reservation'] = array(
					'num_personas'=>0,
					'hombres'=>0,
					'mujeres'=>0,
					'tipo'=>'dormitorio'
				);
			}

			$this->render($section);
		}

		$this->pageTitle = Configure::read('Site.slogan');
		
	}
	
	function email(){ $this->layout = 'empty'; }
	function enviar(){
		$this->Contact->set($this->data);
		if($this->Contact->validates()){
			$site = Configure::read('Site');
			$data = array(
				'nombre'=>$this->data['Contact']['nombre'],
				'email'=>$this->data['Contact']['email'],
				'empresa'=>$this->data['Contact']['empresa'],
				'mensaje'=>$this->data['Contact']['mensaje']
			);

			$this->Contact->clean($data,false,false);
			$this->set($data);
			
			$this->Email->to = $site['email'];
			$this->Email->from = $site['name'].' <noreply@'.$site['domain'].'>';
			$this->Email->subject = 'Mensaje enviado desde '.ucfirst($site['domain']);
			$this->Email->delivery = 'mail';
			$this->Email->sendAs = 'html';
			$this->Email->template = 'contact';

			if(Configure::read('debug')===0){
				if($this->Email->send()){
					$msg = 'Su mensaje ha sido enviado correctamente. ¡Gracias por contactar con nosotros!';
				} else {
					$msg = 'Lo sentimos, pero hubo un problema al enviar el mensaje.';
				}
			} else {
				$this->Email->delivery = 'debug';
				$this->Email->send();
				$msg = 'El Formulario ha sido desactivado porque está en modo Demo.';
			}

			$this->set('successmsg',$msg);
		} else
			$this->set('errors',$this->Contact->invalidFields());

		$this->set('fid',$this->params['url']['fid']);
		$this->render('form');
	}

	function reservar(){
		$this->Reservation->set($this->data);
		if($this->Reservation->validates()){
			$site = Configure::read('Site');

			$this->Reservation->clean($this->data['Reservation'],false,false);
			$this->set($this->data['Reservation']);
			
			$this->Email->to = $site['email'];
			$this->Email->from = $site['name'].' <noreply@'.$site['domain'].'>';
			$this->Email->subject = 'Solicitud de reservación';
			$this->Email->delivery = 'mail';
			$this->Email->sendAs = 'html';
			$this->Email->template = 'reservation';

			if(Configure::read('debug')===0){
				if($this->Email->send()){
					$msg = 'Su solicitud ha sido enviada correctamente. ¡Gracias por contactar con nosotros!';
				} else {
					$msg = 'Lo sentimos, pero hubo un problema al enviar su solicitud.';
				}
			} else {
				$this->Email->delivery = 'debug';
				$this->Email->send();
				$msg = 'El Formulario ha sido desactivado porque está en modo Demo.';
			}

			$this->set('successmsg',$msg);
		} else
			$this->set('errors',$this->Reservation->invalidFields());

		$this->set('fid',$this->params['url']['fid']);
		$this->set('model','Reservation');
		$this->render('form');
	}
}
?>