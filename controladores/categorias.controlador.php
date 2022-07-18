<?php

class ControladorCategorias
{

    // Crear Categorías
    static public function ctrCrearCategoria()
    {

        if (isset($_POST["nuevaCategoria"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ .,]+$/', $_POST["descripcionCategoria"])
            ) {

                $tabla = "categorias";

                $datos = array(
                    "categoria" => $_POST["nuevaCategoria"],
                    "descripcion" => $_POST["descripcionCategoria"]
                );

                $respuesta = modeloCategorias::mdlIngresarCategoria($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>                
                                swal({
                                    type: "success",
                                    title: "¡La categoría ha sido guardada correctamente!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                }).then((result)=>{
                                    if(result.value){

                                        window.location = "categorias";

                                    }
                                });
                            </script>';
                }
            } else {

                echo '<script>
                
                    swal({

                        type: "error",
                        title: "¡La categoría y descripción no debe ir vacía o con caracteres diferentes de (.,)!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        }).then((result)=>{
                        if(result.value){

                            window.location = "categorias";

                        }

                    });

                </script>';
            }
        }
    }

    // Mostrar categorías
    static public function ctrMostrarCategorias($item, $valor)
    {

        $tabla = "categorias";

        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;
    }

    // Editar Categorías
    static public function ctrEditarCategoria()
    {

        if (isset($_POST["editarCategoria"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ .,]+$/', $_POST["editarDescripcionCategoria"])
            ) {

                $tabla = "categorias";

                $datos = array(
                    "categoria" => $_POST["editarCategoria"],
                    "descripcion" => $_POST["editarDescripcionCategoria"],
                    "id" => $_POST["idCategoria"]
                );


                $respuesta = modeloCategorias::mdlEditarCategoria($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>                
                                swal({
                                    type: "success",
                                    title: "¡La categoría ha sido actualizada correctamente!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                }).then((result)=>{
                                    if(result.value){

                                        window.location = "categorias";

                                    }
                                });
                            </script>';
                }
            } else {

                echo '<script>
                
                    swal({

                        type: "error",
                        title: "¡La categoría y descripción no debe ir vacía o con caracteres diferentes de (.,)!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        }).then((result)=>{
                        if(result.value){

                            window.location = "categorias";

                        }

                    });

                </script>';
            }
        }
    }

    // Borrar Categoría
    static public function ctrBorrarCategoria(){

        if(isset($_GET["idCategoria"])){

            $tabla = "categorias";
            $datos = $_GET["idCategoria"];

            $respuesta = modeloCategorias::mdlBorrarCategoria($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>                
                        swal({
                            type: "success",
                            title: "¡La categoría ha sido borrada correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                            }).then((result)=>{
                                if(result.value){

                                    window.location = "categorias";

                                }
                            });
                    </script>';
            }
        }        
    }
}
