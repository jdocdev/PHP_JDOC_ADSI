// subir foto de usuario
$(".nuevaFoto").change(function(){

    var imagen = this.files[0];

    // validación formato imagen png o jpg

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

        $(".nuevaFoto").val("");

        swal({

            title: "No se pudo cargar la imagen",
            text: "El formato permitido es png o jpg",
            type: "error",
            confirmButtonText: "Cerrar"

        });

    }else if(imagen["size"] > 5242880){

        $(".nuevaFoto").val("");

        swal({

            title: "No se pudo cargar la imagen",
            text: "La imagen supera el tamaño permitido 5mb",
            type: "error",
            confirmButtonText: "Cerrar"

        });

    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);

        })

    }

})

// Editar Usuario
$(document).on("click", ".btnEditarUsuario",function(){

    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){

            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").html(respuesta["perfil"]);
            $("#editarPerfil").val(respuesta["perfil"]);
            $("#fotoActual").val(respuesta["foto"]);
            
            $("#passwordActual").val(respuesta["password"]);            

            if(respuesta["foto"] != ""){

                $(".previsualizar").attr("src", respuesta["foto"]);

            }

        }
    });

})

// Activar usuario desde el botón
$(document).on("click", ".btnActivar",function(){

    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");

    var datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({

        url:"ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){

            if(window){

                swal({
                    title: "¡Estado del usuario actualizado!",
                    type: "success",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){

                        window.location = "usuarios";

                    }

                    });

            }

        }

    })

    if(estadoUsuario == 0){

        $(this).removeClass('.btn-success');
        $(this).addClass('.btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoUsuario',1);

    }else{

        $(this).addClass('.btn-success');
        $(this).removeClass('.btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoUsuario',0);

    }

})

// Comprobar que no exista el nombre de usuario en la bd

$("#nuevoUsuario").change(function(){

    $(".alert").remove();

    var usuario = $(this).val();

    var datos = new FormData();
    datos.append("validarUsuario", usuario);

    $.ajax({

        url:"ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success:function(respuesta){

            if(respuesta){

                $("#nuevoUsuario").parent().after('<div class="alert alert-warning">¡Este usuario ya existe!</div>');

                $("#nuevoUsuario").val("");

            }

        }
    })

})

// Eliminar Usuario
$(document).on("click", ".btnEliminarUsuario",function(){

    var idUsuario = $(this).attr("idUsuario");
    var fotoUsuario = $(this).attr("fotoUsuario");
    var usuario = $(this).attr("usuario");

    swal({
        title: 'Eliminar el usuario',
        text: "¡Está acción es irreversible!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Eliminar!'        
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario+"&usuario="+usuario+"&fotoUsuario="+fotoUsuario;

        }
        
    })

})