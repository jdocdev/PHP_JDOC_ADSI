// Editar Categorías

$(".btnEditarCategoria").click(function(){

    var idCategoria = $(this).attr("idCategoria");

    var datos = new FormData();
    datos.append("idCategoria",idCategoria);

    $.ajax({

        url:"ajax/categorias.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){

            $("#idCategoria").val(respuesta["id"]);
            $("#editarCategoria").val(respuesta["categoria"]);
            $("#editarDescripcionCategoria").val(respuesta["descripcion"]);

        }

    })

})

// Eliminar Categoría
$(".btnEliminarCategoria").click(function(){

    var idCategoria = $(this).attr("idCategoria");

        swal({
            title: 'Eliminar el categoría',
            text: "¡Está acción es irreversible!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Eliminar!'        
        }).then((result)=>{
    
            if(result.value){
    
                window.location = "index.php?ruta=categorias&idCategoria="+idCategoria;
    
            }
            
        })

})