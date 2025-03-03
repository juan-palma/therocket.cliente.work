<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Privacidad extends CI_Controller {
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
		
		
				
		
		$data['titulo'] = "Políticas de Privacidad";
		$data['actual'] = "privacidad";
		$data['desc'] = "The Rocket TV | Política de Privacidad";
		
		$this->load->view('public/head_simple', $data);
		$this->load->view('public/privacidad', $data);
		$this->load->view('public/footer_simple', $data);
	}
	
	
	
}



