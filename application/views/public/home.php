<!-- sección HOME INICIO -->
<div class="mainbox bl1" style="background-image: url(<?php echo(base_url( 'assets/public/img/fondo-the-rocket-tv-guatemala.jpg' )); ?> )">
	<div id="astronauta">
		<img src="<?php echo(base_url( 'assets/public/img/astronauta.png' )); ?>" />
	</div>
	
	<div id="textoLogo">
		<div id="logo2"><img src="<?php echo(base_url( 'assets/public/img/logo-guatemala.svg' )); ?>" /></div>
		<h1 id="textoIntro">
			Todo el universo del entretenimiento<br />
			en un solo lugar y a un único precio
		</h1>
	</div>
</div>




<div id="anclaQueEs" class="mainbox bl2">
	<h2 class="titulo">¿Qué es <span class="colorMarca">The Rocket TV</span>?</h2>
	<div class="col2">
		<div class="texto">
			<p>¿Sabias qué? es posible ver todo el contenido de muchísimas plataformas de streaming, pagos por eventos, mas  de 5000 películas, 500 canales de television americana y latinoamericana, box, partidos, conciertos, kids y mucho más.</p>
			<p>Bueno esto  es <span class="colorMarca">The Rocket TV</span>, un servicio en el que encontraras todo esto por el costo de apenas uno solo de ellos por separado.</p>
		</div>
		<div class="grafico">
			<img src="<?php echo(base_url( 'assets/public/img/grafico-marcas.png' )); ?>" />
		</div>
	</div>
</div>




<div class="mainbox bl3">
	<div id="tematica">
		<div id="textoFranja">
			Entretenimiento para todos
		</div>
		<div id="franja"></div>
		<div class="grafico">
			<img src="<?php echo(base_url( 'assets/public/img/tematicas.png' )); ?>" />
		</div>
	</div>
	
	<div id="tiraPeliculas">
		<img src="<?php echo(base_url( 'assets/public/img/tira-peliculas.jpg' )); ?>" />
	</div>
	<p>
		Series, Películas, Zona Kids,<br />
		TV Abierta, Documentales y más
	</p>
	
	<div class="btnBox">
		<input id="btnGoPrueba" type="button" value="PRUEBA"></input>
		<input id="btnGoCompra" type="button" value="COMPRAR" class="compra"></input>
	</div>
</div>




<div id="anclaRequisitos" class="mainbox bl4">
	<div class="triangulo"></div>
	<h2 class="titulo">¡Puedes <span class="colorMarca">disfrutarlo con</span>!</h2>
	<h3>Una gran gama que te colocan a solo unos pasos de gozar todo un mundo de entretenmiento.</h3>
	<div class="col2">
		<div class="texto">
			<p>
				Dispositivos con sistema<br />
				Android (Celular, TV Box o<br />
				Firestick).<br />
				Velocidad de internet minima 10MB
			</p>
			<img src="<?php echo(base_url( 'assets/public/img/android-logo.svg' )); ?>" />
		</div>
		<div class="grafico">
			<img src="<?php echo(base_url( 'assets/public/img/dispositivos.png' )); ?>" />
		</div>
	</div>
</div>



<div id="anclaPrecios" class="mainbox bl5">
	<div class="fondoFix" style="background-image: url(<?php echo(base_url( 'assets/public/img/fondo-nebulosa.jpg' )); ?> )"></div>
	
	<h2 class="titulo">¡Nuestros <span class="colorMarca">Paquetes</span>!</h2>
	
	<div id="btnsCompras" class="boxDown">
		<div class="colPrecios">
			<div class="boxInfo">
				<div class="numero">1</div>
				<div class="texto">Mes</div>
				<div class="precio">Q95</div>
			</div>
			<div class="btnComprar">
				<input id="btn1mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/1')); ?>');"></input>
			</div>
		</div>
		
		<div class="colPrecios">
			<div class="boxInfo">
				<div class="numero">3</div>
				<div class="texto">Meses</div>
				<div class="precio">Q248</div>
			</div>
			<div class="btnComprar">
				<input id="btn2mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/3')); ?>');"></input>
			</div>
		</div>
		
		<div class="colPrecios ideal">
			<div class="boxInfo">
				<div class="numero">6</div>
				<div class="texto">Meses</div>
				<div class="precio">Q428</div>
			</div>
			<div class="btnComprar">
				<input id="btn3mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/6')); ?>');"></input>
			</div>
		</div>
		
		<div class="colPrecios">
			<div class="boxInfo">
				<div class="numero">12</div>
				<div class="texto">Meses</div>
				<div class="precio">Q798</div>
			</div>
			<div class="btnComprar">
				<input id="btn6mes" type="button" value="COMPRAR" class="compra" onclick="goPay('<?php echo(base_url('inicio/paySesion/12')); ?>');"></input>
			</div>
		</div>
	</div>
</div>





<div id="anclaPrueba" class="mainbox bl6">
	<div class="grafico">
		<img src="<?php echo(base_url( 'assets/public/img/fondo-prueba.png' )); ?>" />
	</div>
	
	<div class="flotarCentro">
		<h2 class="titulo">Prueba Gratis</h2>
		<h3 class="titulo2 onlyDesktop">Acceso total por 24 horas en una muestra gratis</h3>
		<input id="btnPedirPrueba" type="button" value="PRUEBA"></input>
	</div>
</div>







<div id="anclaContacto" class="mainbox bl7">
	<h2 class="titulo">Contacto</h2>
	<h4 class="titulo2">Puedes contactarnos a través del siguiente formulario.</h4>
	
	<form id="formulario" action="" method="post" enctype="application/x-www-form-urlencoded">
		<div class="col2">
			<div class="p1">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="" autocomplete="off" class="validaciones vc form-control input-lg" data-validar="texto"></input>
				<input type="email" name="correo" id="correo" placeholder="Correo" value="" autocomplete="off" class="validaciones vc form-control input-lg" data-validar="correo"></input>
			</div>
			<div class="p2">
				<textarea name="comentarios" id="comentarios" placeholder="Comentarios o Información" autocomplete="off" class="validaciones vc form-control input-lg" data-validar="texto"></textarea>
			</div>
		</div>
		<div class="boxBtn">
			<input type="button" value="enviar" id="btnForm"></input>
		</div>
	</form>
</div>



<div id="whats" class="">
	<a href="https://wa.me/+5215543747466" target="_blank">
		<img src="<?php echo(base_url( 'assets/public/img/icono-whatsapp.svg' )); ?>" alt="Contactanos por WhatsApp">
	</a>
</div>
















