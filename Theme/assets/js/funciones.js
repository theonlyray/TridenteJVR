function listarbasesdedatos(){
    $.ajax({
        url:"listarbasesdedatos.php",
        type:"POST",
        beforeSend:function(){
            $('#listarbasesdedatos').html("Cargando...");
        },
        success: function(response){
            $('#listarbasesdedatos').html(response);
        },
        error:function(response){
            $('#listarbasesdedatos').html("No se pudo cargar la información");
        }
    });
} 

function listartablas(basededatos){
    var parametros={
        "basededatos":basededatos,
    }
    $.ajax({
        data:parametros,
        url:"listartablas.php",
        type:"GET",
        beforeSend:function(){
            $('#mostrar').html("Cargando...");
        },
        success: function(response){
            $('#mostrar').html(response);
        },
        error:function(response){
            $('#mostrar').html("No se pudo cargar la información");
        }
    });
}