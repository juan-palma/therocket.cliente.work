<?php

	$idaMail_data = array();
	
	//Datos para el envio del correo.
	$idaMail_data['destino_mail'] = array();
	
	$idaMail_data['cc'] = array();
	
	$idaMail_data['bcc'] = array();
	$idaMail_data['bcc'][] = 'soporte@idalibre.com';
		
	$idaMail_data['origen_nombre'] = 'Sistema - The Rocket TV';
	$idaMail_data['origen_mail'] = 'sistema@therocket.tv';
	$idaMail_data['reply_nombre'] = 'Sistema - The Rocket TV';
	$idaMail_data['reply_mail'] = 'soporte@therocket.tv';
	$idaMail_data['organizacion'] = 'The Rocket TV';
	$idaMail_data['asunto'] = 'Nuevo contacto desde sitio WEB The Rocket TV';
	
	$idaMail_data['priority'] = 3;
	$idaMail_data['encoding'] = 'quoted-printable';
	
	$idaMail_data['host'] = 'therocket.tv';
	$idaMail_data['port'] = 465;
	$idaMail_data['username'] = 'sistema@therocket.tv';
	$idaMail_data['password'] = 'nsYb33-7H3kd0-N0vP';
		
	
	$idaMail_data['texto_plano'] = '
		The Rocket TV
		
		Nuevo contacto.
				
		* * * * * *

		[ fin ]
	';
?>