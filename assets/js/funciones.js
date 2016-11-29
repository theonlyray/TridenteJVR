function listarbasesdedatos(){
	$.ajax({
		url:"listarbasesdedatos.php",
		type:"POST",
		beforeSend:function(){
			$("#menu").html("Cargando...");
		},
		success:function(response){
			$("#menu").html(response);
		},
		error:function(response){
			$("#menu").html("Error");
		}
	});
}

function listartablas(basededatos){
	var parametros={
		"basededatos":basededatos
	};
	$.ajax({
		data: parametros,
		url:"listartablas.php",
		type:"GET",
		beforeSend:function(){
			$("#tablas").html("Cargando...");
		},
		success:function(response){
			$("#tablas").html(response);
		},
		error:function(response){
			$("#tablas").html("Error");
		}
	});
}

function numerodebasesdedatos(){
	$.ajax({
		url:"numerodebasesdedatos.php",
		type:"POST",
		beforeSend:function(){
			$("#numerodebasesdedatos").html("Cargando...");
		},
		success:function(response){
			$("#numerodebasesdedatos").html(response);
		},
		error:function(response){
			$("#numerodebasesdedatos").html("Error");
		}
	});
}

function listarregistros(basededatos,tabla){
    var parametros={
     "basededatos":basededatos,
     "tabla":tabla
    };
	$.ajax({
        data:parametros,
		url:"listarregistros.php",
		type:"POST",
		beforeSend:function(){
			$("#tablas").html("Cargando...");
		},
		success:function(response){
			$("#tablas").html(response);
		},
		error:function(response){
			$("#tablas").html("Error");
		}
	});
}