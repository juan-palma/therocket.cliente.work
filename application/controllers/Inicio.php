<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
		
	public function index(){
		
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
		
		
		
		//Consulta - HOME-INICIO
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'inicio' );
		
		$isInicio = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($isInicio) && count($isInicio) > 0) ? $isInicio[0] : '';
		$nuevoValor = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$valoresDB = ( is_object(json_decode($nuevoValor)) ) ? json_decode($nuevoValor) : new stdClass();
		$data['inicioDB'] = $valoresDB;
		
		
		
		
		
		$data['titulo'] = "Home";
		$data['actual'] = "home";
		$data['desc'] = "The Rocket TV | Todo el entretenimiento en un solo lugar";
		
		$this->load->view('public/head', $data);
		$this->load->view('public/home', $data);
		$this->load->view('public/footer', $data);
	}
	
	
	
	
	public function send(){
		
	}
	
	
	
	
	
	public function paySesion($meses){}
	// public function paySesion($meses){
	// 	header('Content-Type: application/json');
	// 	\Stripe\Stripe::setApiKey(getenv('ROCKET_STRIPE_S'));
		
		
	// 	$monto = false;
		
	// 	switch($meses){
	// 		case "1":
	// 			$monto = 9500;
	// 			$nombre = 'Plan 1 mes - The Rocket TV';
	// 			$imagen = base_url( 'assets/public/img/paquete-1-mes-the-rocket-tv.jpg' );
	// 		break;
			
	// 		case "3":
	// 			$monto = 24800;
	// 			$nombre = 'Plan 3 meses - The Rocket TV';
	// 			$imagen = base_url( 'assets/public/img/paquete-3-mes-the-rocket-tv.jpg' );
	// 		break;
			
	// 		case "6":
	// 			$monto = 42800;
	// 			$nombre = 'Plan 6 meses - The Rocket TV';
	// 			$imagen = base_url( 'assets/public/img/paquete-6-mes-the-rocket-tv.jpg' );
	// 		break;
			
	// 		case "12":
	// 			$monto = 79800;
	// 			$nombre = 'Plan 12 meses - The Rocket TV';
	// 			$imagen = base_url( 'assets/public/img/paquete-6-mes-the-rocket-tv.jpg' );
	// 		break;
	// 	}
		
	// 	if($monto === false){
	// 		echo json_encode(['id' => 'null']);
	// 		return false;
	// 	}
		
		
		
		
	// 	$YOUR_DOMAIN = base_url('pago');
		
	// 	$checkout_session = \Stripe\Checkout\Session::create([
	// 	  'payment_method_types' => ['card'],
	// 	  'line_items' => [[
	// 	    'price_data' => [
	// 	      'currency' => 'gtq',
	// 	      'unit_amount' => $monto,
	// 	      'product_data' => [
	// 	        'name' => $nombre,
	// 	        'images' => [$imagen]
	// 	      ]
	// 	    ],
	// 	    'quantity' => 1
	// 	  ]],
	// 	  'mode' => 'payment',
	// 	  'success_url' => $YOUR_DOMAIN . '/exito',
	// 	  'cancel_url' => $YOUR_DOMAIN . '/cancelado'
	// 	]);
		
	// 	//$this->session->set_userdata('userPaySession', $checkout_session->id);
	// 	$this->session->set_flashdata('userPaySession', $checkout_session->id);
	// 	$this->session->set_flashdata('userPayPaquete', $meses);
		
	// 	echo json_encode(['id' => $checkout_session->id]);
				
	// }
		
		
	
	public function clean(){
		unset(
	        $_SESSION['formData']
		);
		
		redirect(base_url('inicio'));
	}

	
}



