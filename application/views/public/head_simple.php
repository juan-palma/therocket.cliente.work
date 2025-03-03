<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es" class="no-js"> <!--<![endif]-->
	<head itemscope itemtype="http://schema.org/Person" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# profile: http://ogp.me/ns/profile#">
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
		
		<meta http-equiv="Content-Encoding" content="gzip" />
		<meta http-equiv="Accept-Encoding" content="gzip, deflate" />
				
		<link rel="shortcut icon" href="<?php echo(base_url('assets/public/img/favicon.ico')); ?>?v1" />
		<link rel="icon" href="<?php echo(base_url('assets/public/img/favicon.ico')); ?>?v1" />
		<link rel="apple-touch-icon" href="<?php echo(base_url('assets/public/img/apple-touch-icon.png')); ?>" />
				
		<title><?php echo($titulo); ?></title>
		<meta name="description" content="<?php echo($generalDB->desc_global); ?>" />
	
					
		<meta name="dcterms.audience" content="Global" />
		<meta name="rating" content="General" />
		
	
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		
	<!-- 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	    <link href="<?php echo(base_url('assets/admin/css/light-bootstrap-dashboard.css?v=2.0.1')) ?>" rel="stylesheet" />
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
		
		<link href="<?php echo(base_url('assets/public/css/main.css')) ?>" rel="stylesheet" type="text/css">
				
		
		<!-- Meta Data de verificacion de sitios web. -->
		<meta name="msvalidate.01" content="ED387E3F99B5758EB607324E9928F951" />
		<meta name="p:domain_verify" content="92115dc4d60becb13618274218b951f2"/>
		
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '167894728587237');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=167894728587237&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
		
				
		
		<?php if(isset($actual) && $actual !== ''){
			?>
		<script type="text/javascript"> 
			var pageActual = '<?php echo($actual); ?>';
			var baseDir = '<?php echo(base_url()); ?>';
		</script>
			<?php
		}
		?>
		
		
<?php

?>
						
	</head>
	<body id="<?php echo($actual); ?>" itemscope="itemscope" itemtype="http://schema.org/WebPage" >
<!-- 		<div id="bodyBackFix" style="background-image: url(<?php echo(base_url( 'assets/public/img/general/'.$generalDB->fondo[0]->img )); ?>);"></div> -->
		<style type="text/css">
			<?php 
				if(property_exists($generalDB, "color_fondo") && $generalDB->color_fondo !== ''){ echo('body{background-color:'.$generalDB->color_fondo.' !important;}'); }
				if(property_exists($generalDB, "color_principal") && $generalDB->color_principal !== ''){
					echo('.colDin1{color:'.$generalDB->color_principal.' !important; fill:'.$generalDB->color_principal.' !important;}');
					echo('.colDin1-back{background-color:'.$generalDB->color_principal.' !important;}');
					//echo('#menu .red svg{color:'.$generalDB->color_principal.' !important; fill:'.$generalDB->color_principal.' !important;}');
					echo(':root{ --colorPrincipal: '.$generalDB->color_principal.' !important; }');
				}
				if(property_exists($generalDB, "color_contraste") && $generalDB->color_contraste !== ''){
					echo('.colDin1-op{color:'.$generalDB->color_contraste.' !important; fill:'.$generalDB->color_contraste.' !important;}');
					echo('.colDin1-back-op{background-color:'.$generalDB->color_contraste.' !important;}');
				}
			?>
		</style>


		
		<nav id="nav" class="onlyDesktop">
			<div id="logo"><a href="<?php echo(base_url()); ?>"><img src="<?php echo(base_url('assets/public/img/logo.svg')); ?>"></img></a></div>			
		</nav>
				
				
		
		<!-- Add your site or application content here -->
        <div id="primaryContainer">

