/* EDITAR CLIENTE */

$(".btnEditarCliente").click(function(){

    var idCliente = $(this).attr("idCliente");

    var datos = new FormData();
    datos.append("idCliente", idCliente);

    $.ajax({

        url:"ajax/clientes.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success:function(respuesta){

            $("#idCliente").val(respuesta["id"]);
            $("#editarCliente").val(respuesta["nombre"]);
            $("#editarDocumentoId").val(respuesta["documento"]);
            $("#editarEmail").val(respuesta["email"]);
            $("#editarTelefono").val(respuesta["telefono"]);
            $("#editarDireccion").val(respuesta["direccion"]);
            $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
        } 
    }) 
})
/* ELIMINAR CLIENTE */

$("btnEliminarCliente").click(function(){

    var idCliente = $(this).attr("idCliente");
    
    swal({
        title: '¡Está seguro de borrar el cliente?',
        text: "¡Si no lo está puede cancelar la accíón!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonTex: 'Si, borrar cliente!'
        }).then((result) => {
            if (result.value) {

                window.location = "index.php?ruta=clientes&idCliente"+idCliente;
            }
        })
})