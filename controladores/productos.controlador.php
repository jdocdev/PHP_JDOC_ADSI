<?php

class ControladorProductos{

    //Mostrar productos
    static public function ctrMostrarProductos($item,$valor){

        $tabla = "productos";
        $respuesta = ModeloProductos::mdlMostrarProductos($tabla,$item,$valor);
        return $respuesta;

    } 

    // Crear productos
    static public function ctrCrearProducto(){

        if(isset($_POST["nuevaDescripcion"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoProducto"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoStock"]) &&	
			   preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioCompra"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioVenta"])){

                $ruta = "vistas/img/productos/default/anonymous.png";

                $tabla = "productos";
				$datos = array("id_categoria" => $_POST["nuevaCategoria"],
							   "codigo" => $_POST["nuevoCodigo"],
                               "producto" => $_POST["nuevoProducto"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "stock" => $_POST["nuevoStock"],
							   "precio_compra" => $_POST["nuevoPrecioCompra"],
							   "precio_venta" => $_POST["nuevoPrecioVenta"],
							   "imagen" => $ruta);
                
                $respuesta = ModeloProductos::mdlIngresarProducto($tabla, $datos);

                if($respuesta == "ok"){

                    echo'<script>
                        swal({
                            type: "success",
                            title: "El producto ha sido guardado correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                window.location = "productos";
                                }
                            })
			  	    </script>';

                }

               }else{

                echo'<script>
                        swal({
                            type: "error",
                            title: "El producto no puede tener campos vacíos o caracteres especiales",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                            }).then((result) => {
                                if (result.value) {
                                window.location = "productos";
                                }
                            })
			  	    </script>';

               }

        }

    }

}