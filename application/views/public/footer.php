<?php
$footerDB = new stdClass();
$footerDB->titulo_general = 'COTIZAR';
//$footerDB->direccion = $generalDB->direccion;
$footerDB->mail_destino = $generalDB->correo_form;

if(property_exists($generalDB, "facebook") && $generalDB->facebook !== ''){
	$valor = new stdClass();
	$valor->red = 'facebook';
	$valor->nombre = 'Mi Pagina';
	$valor->liga = $generalDB->facebook;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_facebook"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "behance") && $generalDB->behance !== ''){
	$valor = new stdClass();
	$valor->red = 'behance';
	$valor->nombre = 'Mi Portafolio';
	$valor->liga = $generalDB->behance;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_behance"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "instagram") && $generalDB->instagram !== ''){
	$valor = new stdClass();
	$valor->red = 'instagram';
	$valor->nombre = 'Mi Galeria';
	$valor->liga = $generalDB->instagram;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_instagram"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "linkedin") && $generalDB->linkedin !== ''){
	$valor = new stdClass();
	$valor->red = 'linkedIn';
	$valor->nombre = 'Mi Curriculum';
	$valor->liga = $generalDB->linkedin;
	$valor->icono = '<svg viewBox="0 0 21 19" preserveAspectRatio="xMidYMin slice">
						<use xlink:href="#svg_linkedin"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}

if(property_exists($generalDB, "vimeo") && $generalDB->vimeo !== ''){
	$valor = new stdClass();
	$valor->red = 'vimeo';
	$valor->nombre = 'Mi Canal';
	$valor->liga = $generalDB->vimeo;
	$valor->icono = '<svg viewBox="0 0 18.5 19" preserveAspectRatio="xMidYMin slice" class="">
						<use xlink:href="#svg_vimeo"/>
				    </svg>
					';
	$footerDB->redes[] = $valor;
}


//Formulario contacto
$data_footer_nombre  =  array ( 
	'name' => 'nombre',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'NOMBRE COMPLETO*',
	'data-validar' => 'texto'
);
$data_footer_mail  =  array ( 
	'name' => 'correo',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'E-MAIL*',
	'data-validar' => 'correo'
);
$data_footer_tel  =  array ( 
	'name' => 'telefono',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'TELÉFONO*',
	'data-validar' => 'telefono'
);
$data_servicio_mensaje  =  array ( 
	'name' => 'mensaje',
	'value' => '',
	'class' => 'validaciones vc form-control input-lg',
	'autocomplete' => 'off',
	'placeholder' => 'MENSAJE',
	'data-validar' => 'texto'
);
?>
		</div>
		
		
		
		<footer id="footer" class="mainbox">
			<div class="fooCols">
				<div class="fooCol fooCol1">
					<div id="powerBy">
						PowerBy: <a href="https://idalibre.com/" target="_blank"><span>ID.A libre</span></a>
					</div>
				</div>
				<div class="fooCol fooCol2">
					<a href="<?php echo(base_url('privacidad')); ?>"><div id="btnPoliticas">Política de Privacidad</div></a>
				</div>
				<div class="fooCol fooCol3">
					<div class="grafico">
						<div class="logoFoo"><img src="<?php echo(base_url( 'assets/public/img/logo-guatemala.svg' )); ?>" /></div>
					</div>
				</div>
			</div>
		</footer>

		
		
		
		<!-- Carga de librerias !!.. -->
<!-- 		<script src="https://sdks.shopifycdn.com/js-buy-sdk/v2/latest/index.umd.min.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<!-- 		<script src="https://player.vimeo.com/api/player.js"></script> -->
		<script src="https://js.stripe.com/v3/"></script>
		
		<script src="<?php echo(base_url('assets/common/js/librerias/plugins/sweetalert2.min.js')) ?>" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
		<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.helper.ie8.js"></script><![endif]-->
<!-- 		<script src="<?php echo(base_url('assets/common/js/librerias/rellax.min.js')) ?>"></script> -->
		<script src="<?php echo(base_url('assets/common/js/librerias/mootools-core.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/mootools-more.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/plugins.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/common/js/librerias/formvalid.js')) ?>"></script>
		<script src="<?php echo(base_url('assets/public/js/owner/main.js')) ?>"></script>
		
		<?php
		?>

	</body>
</html>