var idagl = {};

//Seccion de VARIABLES: _____________________________________________________________________________________
idagl.elementos = {};
idagl.recaptcha = "incorrecto";






//Seccion de ATAJOS: _____________________________________________________________________________________
var id = idagl;
var el = id.elementos;







//Seccion de Funciones Globales: _____________________________________________________________________________________
//Funcion general de consultas externas.
function db_conectE(url, datos, f, e){
	new Request.JSON({
		method:'post',
		url:url,
		secure:false,
		onError:function(er){
			if(typeOf(e) === 'function'){ e(er); }
			console.warn(er);
			alert("Ocurrio un problema al guardar su informacion, intentelo mas tarde");
			
		},
		onFailure:function(xhr){
			if(typeOf(e) === 'function'){ f(xhr); }
			console.warn(xhr);
			alert("Ocurrio un problema al guardar su informacion, intentelo mas tarde");
			
		},
		onSuccess:function(j){
			if(j){
				if(j.status == 'ok'){
					if(typeOf(f) === 'function'){ f(j); }
				} else{
					if(typeOf(e) === 'function'){ e(j); }
					console.warn(j);
					alert("Ocurrio un problema al guardar su informacion, intentelo mas tarde");
				}
			} else{
				if(typeOf(e) === 'function'){ e(j); }
				console.warn(j);
				alert("Ocurrio un problema con su consulta, intentelo mas tarde");
			}
		}
	}).post('datos='+ JSON.encode(datos));
}





function db_conect(url, datos, f, e){
	// Set up the request.
	var xhr = new XMLHttpRequest();
	
	// Open the connection.
	xhr.open('POST', url, true);
	
	// Set up a handler for when the request finishes.
	xhr.onload = function () {
		var j = JSON.parse(xhr.response);
		
		if (xhr.status === 200) {
			if(j.status != 'ok'){
				if(j.status != 'personal'){
					e(j);
				} else{
					console.info('Ocurrio un error al procesar tu informacion.');
					console.info(j);
					swal('', 'Ocurrio un error al procesar tu informacion, intentelo más tarde o póngase en contacto con su área de sistemas.', 'warning');
					e(j);
				}
			} else{
				swal('', 'Se envio su mensaje con exito', 'success');
				f(j);
			}
		} else {
			console.info('Ocurrio un error con la coneccion.');
			console.info(j);
			swal('', 'Ocurrio un error con la coneccion., intentelo más tarde o póngase en contacto con su área de sistemas.', 'warning');
			e(j);
		}
	};
	
	xhr.onerror = function(){
		console.info('Ocurrio un error con la coneccion.');
		console.info(j);
		swal('', 'Ocurrio un error con la coneccion., intentelo más tarde o póngase en contacto con su área de sistemas.', 'warning');
		e(j);
	}
	
	// Send the Data.
	var consulta = xhr.send(datos);
}



function db_conect2(url, datos, f, e){
	// Set up the request.
	var xhr = new XMLHttpRequest();
	
	// Open the connection.
	xhr.open('POST', url, true);
	
	// Set up a handler for when the request finishes.
	xhr.onload = function () {
		var j = JSON.parse(xhr.response);
		
		if (xhr.status === 200) {
			if(j.status != 'ok'){
				if(j.status != 'personal'){
					e(j);
				} else{
					console.info('Ocurrio un error al procesar tu informacion.');
					console.info(j);
					swal('', 'Ocurrio un error al procesar tu informacion, intentelo más tarde o póngase en contacto con su área de sistemas.', 'warning');
					e(j);
				}
			} else{
				f(j);
			}
		} else {
			console.info('Ocurrio un error con la coneccion.');
			console.info(j);
			swal('', 'Ocurrio un error con la coneccion., intentelo más tarde o póngase en contacto con su área de sistemas.', 'warning');
			e(j);
		}
	};
	
	xhr.onerror = function(){
		console.info('Ocurrio un error con la coneccion.');
		console.info(j);
		swal('', 'Ocurrio un error con la coneccion., intentelo más tarde o póngase en contacto con su área de sistemas.', 'warning');
		e(j);
	}
	
	// Send the Data.
	var consulta = xhr.send(datos);
}







function requestDownload(url){
    var request = new XMLHttpRequest();
    request.open('POST', url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    request.responseType = 'blob';

    request.onload = function() {
      // Only handle status code 200
      if(request.status === 200) {
        // Try to find out the filename from the content disposition `filename` value
        var disposition = request.getResponseHeader('content-disposition');
        var matches = /"([^"]*)"/.exec(disposition);
        var filename = (matches != null && matches[1] ? matches[1] : 'inmotion.vcf');

        // The actual download
        var blob = new Blob([request.response], { type: 'text/x-vcard' });
        var link = document.createElement('a');
        link.href = window.URL.createObjectURL(blob);
        link.download = filename;

        document.body.appendChild(link);

        link.click();

        document.body.removeChild(link);
      }
      
    };

    request.send('content=' + 'nada');
}













function header_run(){
	
	var boxBtn = document.id('navMobileOpen');
	var btnMovile = boxBtn.getElement('img');
	btnMovile.addEvent('click', function(){
		document.id('navExtend').addClass('active');
	});
	
	
	var boxBtnClose = document.id('navMobileClose');
	var btnMovileClose = boxBtnClose.getElement('img');
	btnMovileClose.addEvent('click', function(){
		document.id('navExtend').removeClass('active');
	});
		
	
	var scrollFX = new Fx.Scroll(window, {
	    offset: {
	        x: 0,
	        y: 0
	    }
	});
	
	document.id('quees').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaQueEs'), 'y');
	});
	document.id('queesM').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaQueEs'), 'y');
		document.id('navExtend').removeClass('active');
	});
	
	document.id('requisitos').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaRequisitos'), 'y');
	});
	document.id('requisitosM').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaRequisitos'), 'y');
		document.id('navExtend').removeClass('active');
	});
	
	document.id('precios').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaPrecios'), 'y');
	});
	document.id('preciosM').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaPrecios'), 'y');
		document.id('navExtend').removeClass('active');
	});
	document.id('btnGoCompra').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaPrecios'), 'y');
	});
	
	document.id('prueba').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaPrueba'), 'y');
	});
	document.id('pruebaM').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaPrueba'), 'y');
		document.id('navExtend').removeClass('active');
	});
	document.id('btnGoPrueba').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaPrueba'), 'y');
	});
	
	document.id('contacto').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaContacto'), 'y');
	});
	document.id('contactoM').addEvent('click', function(){
		scrollFX.toElement(document.id('anclaContacto'), 'y');
		document.id('navExtend').removeClass('active');
	});
	
	document.id('btnPedirPrueba').addEvent('click', function(){
		alert("Si deseas una prueba de 24 horas dirigete al formulario de contacto al final del sitio y mandanos un texto de 'Solicito Prueba'.");
	});
}















//--- Seccion de FUNCIONES: _____________________________________________________________________________________

//::::::::::::::::::::::::
// ***** HOME *****//








//::::::::::::::::::::::::
// ***** header *****//
/*
idagl.menu = 'off';
function header_run(){
	var btnMenu = document.id('btnMenu');
	var btnMenuClose = document.id('menuItemClose');
	var menu = document.id('menuItems');
	
	function menuActive(){
		if(idagl.menu === 'off'){
			idagl.menu = 'on';
			menu.removeClass('dnone');
			(function(){
				menu.addClass('activo');
			}).delay(10);
		} else{
			idagl.menu = 'off';
			menu.removeClass('activo');
			(function(){
				menu.addClass('dnone');
			}).delay(300);
		}
	}
	
	btnMenu.addEvent('click', menuActive);
	btnMenuClose.addEvent('click', menuActive);
}
*/






//::::::::::::::::::::::::
// ***** Footer *****//
function mail_run(){	
	
	//Funcion que se ejecuta antes de enviar los datos.
	idagl.ocupado = false;
	idagl.seguros = {};
	function sendAll(){
		idagl.seguros.msnManual = '';
		var datos = {};
		
		function condicion_siguiente(){
			var status = true;
			
			idagl.seguros.arrayAll = $$('#formulario *[data-validar]');
			status = idagl.seguros.arrayAll.every(function(item){
				return item.idago.validado === true;
			});
			if(status === false){ idagl.seguros.msnManual += 'Todos los campos son obligatorios.\r\n\r\n'; }
				
			return status;
		}	
		
		
		
		
		if(condicion_siguiente()){
			idagl.ocupado = true;
			
			var datos = new FormData(document.id('formulario'));
						
			function limpiar(j){
				if(j.status == "ok"){
					swal('', 'Se envio su mensaje con exito', 'success');
					//alert("El registro fue guardado con exito");
					idagl.ocupado = false;
					document.id('formulario').reset();
					//location.reload();
				} else{
					
				}
			}
			
			function error(j){
				swal('', 'Se produjo un error al ingresar el registro, póngase en contacto con su área de sistemas.', 'warning');
				console.info(j.errores);
				idagl.ocupado = false;
			}
			
			
			
			// Set up the request.
			var xhr = new XMLHttpRequest();
			
			// Open the connection.
			//xhr.open('POST', window.location.pathname+'/do_upload', true);
			xhr.open('POST', baseDir+"ajax/footerForm", true);
			
			// Set up a handler for when the request finishes.
			xhr.onload = function () {
				console.info(xhr);
				var j = JSON.parse(xhr.response);
				if (xhr.status === 200) {
					if(j.status === "ok"){
						limpiar(j);
					} else{
						error(j);
					}
				} else {
					alert('An error occurred!');
				}
			};
			
			// Send the Data.
			xhr.send(datos);
			//db_conectE(baseDir+"ajax/footerForm", datos, limpiar, error );
		
			
		} else{
			idagl.ocupado = false;
			alert(idagl.seguros.msnManual);
		}
	}
	
	
	function sendIntervencion(){
		if(idagl.ocupado == true){ return false; }
		sendAll();
		return false;
	}
	
	
	//Validacion de formulario:
	idaglGV_def.msn.validar.send.novalid = "Alguno de los campos tiene un error o está incompleto.\n\nFavor de verificar su información.";
	idaglGV_def.msn.validar.nulo = 'Este campo es obligatorio y debe contener datos, por favor capture la información correspondiente.\n\nverifique por favor.';
	
	var ml1 = [];
	
	ml1[0] = {
		objeto: 'texto',
		validar: {
			parametro: 'texto'
		},
		funciones: {
// 			nombre: 'mayusculas'
		},
		nulo: {
			status: false,
			valores: {
				//adicionales_c: true
			}
		}
	};
	
	ml1[2] = {
		objeto: 'correo',
		validar: {
			parametro: 'correo',
			error: 'El Correo Electrónico que ingresó no es válido. \n\nFavor de verificarlo.'
		},
		nulo: {
			status: false
		}
	};
	
	ml1[3] = {
		objeto: 'telefono',
		validar: {
			parametro: 'limite',
			valor: {
				unico: 10,
				invertir: true
			},
			error: 'El Número de Teléfono que ingresó está incompleto. \nFavor de ingresar los 10 dígitos de su número incluyendo lada'
		},
		funciones: [{
			nombre: 'solonumerico'
		}/*
, {
			nombre: 'autotexto',
			valor: '10 digitos con Lada...'
		}
*/
	]
	};
	
	
	
	idaV_inicio({
		formulario: 'formulario',
		lista: ml1,
		intervencion: sendIntervencion
	});
	
	
	var contactBtn = document.id('btnForm');
	contactBtn.addEvent('click', function(){
		sendIntervencion();
		//document.getElementById("formulario").submit();
	});
}









































var normalize = (function() {
  var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç", 
      to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
      mapping = {};
 
  for(var i = 0, j = from.length; i < j; i++ )
      mapping[ from.charAt( i ) ] = to.charAt( i );
 
  return function( str ) {
      var ret = [];
      for( var i = 0, j = str.length; i < j; i++ ) {
          var c = str.charAt( i );
          if( mapping.hasOwnProperty( str.charAt( i ) ) )
              ret.push( mapping[ c ] );
          else
              ret.push( c );
      }      
      return ret.join( '' ).replace( /[^-A-Za-z0-9]+/g, '' ).toLowerCase();
  }
 
})();



























//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//Codigos de pasarela e pagos stripe
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//var stripe;

function goPay(dir){
	
	var stripe = Stripe(rscp);
	
    fetch(dir, {
        method: 'POST',
    }).then(function(response) {
        return response.json();
    }).then(function(session) {
        return stripe.redirectToCheckout({
            sessionId: session.id
        });
    }).then(function(result) {
        if (result.error) {
            alert(result.error.message);
        }
    }).catch(function(error) {
        console.error('Error:', error);
    });
}




















//--- Eventos a ejecutar cuando el DOM este listo _____________________________________________________________________________________
window.addEvent('domready', function(){
	if(typeof pageActual !== 'undefined'){
		if(pageActual !== ''){
			switch(pageActual){
				case 'home':
					mail_run();
					header_run();
					//var rellax = new Rellax('.rellax');
				break;
				
			}
		}
	}
	
	
});


//--- Eventos a ejecutar cuando la pagina este cargada _____________________________________________________________________________________
window.addEvent('load', function(){
	//stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
});








