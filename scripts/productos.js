function init()
{
	

	var tipo = $("#tipo").text();
	//alert(tipo);

	if (tipo>0) {
		$.post("ajax/productos.php?op=listar_tipo&tipo="+tipo,function(r){
	    	$("#box_productos").html(r);
		                     
		});
	}else{
		listar_todos_productos();
	}
}


function listar_todos_productos()
{
	$.post("ajax/productos.php?op=listar_todos_productos",function(r){
	    $("#box_productos").html(r);

	    				    	
	                     
	});
}

function listar_pizarrones()
{
	$.post("ajax/productos.php?op=listar_tipo&tipo="+1,function(r){
	    $("#box_productos").html(r);

	    				    	
	                     
	});
}

function listar_sillas()
{
	$.post("ajax/productos.php?op=listar_tipo&tipo="+2,function(r){
	    $("#box_productos").html(r);

	    				    	
	                     
	});
}

function listar_mesas()
{
	$.post("ajax/productos.php?op=listar_tipo&tipo="+3,function(r){
	    $("#box_productos").html(r);

	    				    	
	                     
	});
}


init();