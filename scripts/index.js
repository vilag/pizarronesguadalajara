function init()
{
	//cargar_imagen_encabezado();

	//alert("entra");
	$('#div_formulario_contacto').removeClass("mostrar_formulario").addClass("ocultar_formulario");

	jQuery(document).on('submit','#formulario', function(event){


		event.preventDefault();
		jQuery.ajax({
			url: 'ajax/envio_contacto.php',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
		})

		.done(function(respuesta){
			console.log(respuesta);

			if (!respuesta.error) {
				//bootbox.alert('Los datos se guardaron con exito');



				/*confirm({
				    message: "Solicitud enviada exitosamente, ¿Desea ver la lista de pedidos?",
				    buttons: {
				        confirm: {
				            label: 'Si',
				            className: 'btn-success'
				        },
				        cancel: {
				            label: 'No',
				            className: 'btn-danger'
				        }
				    },
				    callback: function (result) {
				      
				        if (result==true) {
				        	//$(location).attr("href","list_pedidos.php");
				        }else{
				        	//$(location).attr("href","nuevo_pedido.php");
				        }
				    }
				});*/

				$(location).attr("href","http://pizarronesgdl-customer-care.site/indexpost.php");



				

			}else{
				alert('Los datos No se han ingresado');
			}
		})

		/*.fail(function(resp){
			console.log(resp.responseText);
		})

		.always(function(){
			console.log("complete");
		})*/



	});

	acces();
	piz();
	sillas();
	mesas();
}

function acces_hover(){
	$('#acces_1').hide();
    $('#acces_2').show();
}

function acces()
{
	$('#acces_1').show();
    $('#acces_2').hide();
}

function piz_hover(){
	$('#piz_1').hide();
    $('#piz_2').show();
}

function piz()
{
	$('#piz_1').show();
    $('#piz_2').hide();
}

function sillas_hover(){
	$('#silla_1').hide();
    $('#silla_2').show();
}

function sillas()
{
	$('#silla_1').show();
    $('#silla_2').hide();
}

function mesas_hover(){
	$('#mesa_1').hide();
    $('#mesa_2').show();
}

function mesas()
{
	$('#mesa_1').show();
    $('#mesa_2').hide();
}


function abrir_prod_1()// para generar factura
{

  	window.open("productos.php?tipo="+1,"_self");
  	//window.location="productos.php?tipo="+1;
  	//Window.open('productos.php','_top')
}

function abrir_prod_2()// para generar factura
{

  	window.open("productos.php?tipo="+2,"_self");
}

function abrir_prod_3()// para generar factura
{

  	window.open("productos.php?tipo="+3,"_self");
}



init();