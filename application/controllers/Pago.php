<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pago extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	
	public function index(){
		redirect(base_url());
	}
	
	public function exito(){
		try {
			if($this->session->flashdata('userPaySession') === null){ redirect(base_url()); }
			
		    $stripe = new \Stripe\StripeClient( getenv('ROCKET_STRIPE_S') );
			$userSes = $stripe->checkout->sessions->retrieve( $this->session->flashdata('userPaySession'), [] );
			$correoUser = $userSes->customer_details->email;
			$pagoUser = $userSes->amount_subtotal;
			$moneda = $userSes->currency;
			$payStatusUser = $userSes->payment_status;
			$paqueteUser = $this->session->flashdata('userPayPaquete');
						
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'pagos';
			$valores = array( 
				'id_sesion_pay' => $this->session->flashdata('userPaySession'),
				'correo' => $correoUser,
				'monto' => $pagoUser,
				'moneda' => $moneda,
				'pay_status' => $payStatusUser,
				'paquete' => $paqueteUser
			);
			$insert = $this->basic_modal->genericInsert('sistema', $valores);
			
			//print_r($userSes);
		} catch (Throwable $t) {
		    // Executed only in PHP 7, will not match in PHP 5.x
		    //print_r($t);
		} catch (Exception $e) {
		    // Executed only in PHP 5.x, will not be reached in PHP 7
		    //print_r($e);
		}
		
		
		
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';
		
		
		
		//Consulta - GENERAL
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'general' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['generalDB'] = $cleanObjecDB;
		
		
		
		$this->load->helper('mail');
		require(VIEWPATH.'admin/customers_parametros.php');
				
		$idaMail_data['destino_mail'][] = $correoUser;
		$idaMail_data['bcc'][] = "contratar@therocket.tv";
		$idaMail_data['origen_mail'] = $cleanObjecDB->correo_form;
		$idaMail_data['reply_mail'] = $cleanObjecDB->correo;
		$idaMail_data['username'] = $cleanObjecDB->correo_form;
		$idaMail_data['password'] = $cleanObjecDB->correo_pass;
				
		
		$template = FCPATH.'assets/public/template/exitoForm.php';
		$pagoUserclean = $pagoUser.substr($string, 0, -2);
		$info = array();
		$info['mail'] = $correoUser;
		$info['mensaje'] = "Se proceso con exito tu pago por Q$pagoUserclean, tu cuenta esta siendo configurada y en breve recibirás un correo con tus datos de acceso para el plan $paqueteUser meses ";
		$info['logo'] = base_url('assets/public/img/logo.svg');
		$info['empresa'] = 'The Rocket TV';
		$info['sitio'] = base_url();
		
		
		if($insert){
			$respMail = ida_sendMail($template, $info, $idaMail_data);
			if($respMail){
				//$json['valores'][] = 'Se envió el correo de manera correcta.';
			} else{
				//$json['status'] = 'error';
				//$json['errores'][]  = 'Error interno al enviar el correo';
			}
		}
		
		
		
		
		$data['titulo'] = "Exito";
		$data['actual'] = "exito";
		$data['desc'] = "The Rocket TV | Tu pago fue exitoso disfruta";
		
		$this->load->view('public/head_simple', $data);
		$this->load->view('public/exito', $data);
		$this->load->view('public/footer_simple', $data);
	}
	
	public function cancelado(){
		try {
			if($this->session->flashdata('userPaySession') === null){ redirect(base_url()); }
			
		    $stripe = new \Stripe\StripeClient( getenv('ROCKET_STRIPE_S') );
			$userSes = $stripe->checkout->sessions->retrieve( $this->session->flashdata('userPaySession'), [] );
			$correoUser = $userSes->customer_details->email;
			$pagoUser = $userSes->amount_subtotal;
			$moneda = $userSes->currency;
			$payStatusUser = $userSes->payment_status;
			$paqueteUser = $this->session->flashdata('userPayPaquete');
						
			$this->basic_modal->clean();
			$this->basic_modal->tabla = 'pagos';
			$valores = array( 
				'id_sesion_pay' => $this->session->flashdata('userPaySession'),
				'correo' => $correoUser,
				'monto' => $pagoUser,
				'moneda' => $moneda,
				'pay_status' => $payStatusUser,
				'paquete' => $paqueteUser
			);
			$insert = $this->basic_modal->genericInsert('sistema', $valores);
			
			//print_r($userSes);
		} catch (Throwable $t) {
		    // Executed only in PHP 7, will not match in PHP 5.x
		    //print_r($t);
		} catch (Exception $e) {
		    // Executed only in PHP 5.x, will not be reached in PHP 7
		    //print_r($e);
		}
		
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';
		
		
		
		//Consulta - GENERAL
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'general' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['generalDB'] = $cleanObjecDB;
		
		$data['titulo'] = "Cancelado";
		$data['actual'] = "cancelado";
		$data['desc'] = "The Rocket TV | proceso incompleto";
		
		$this->load->view('public/head_simple', $data);
		$this->load->view('public/cancelado', $data);
		$this->load->view('public/footer_simple', $data);
		
		
	}
	
	
	private function cleanVar(){
		$this->status = [];
		$this->valores = [];
		$this->errores = [];
	}
	
}