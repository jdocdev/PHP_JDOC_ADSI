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

            // Validación de la imagen           
                $ruta = "vistas/img/productos/default/anonymous.png";

                if (isset($_FILES["nuevaImagen"]["tmp_name"])){

                    list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                    // Crear directorio donde se almacenaran las imagenes
                    $directorio = "vistas/img/productos/".$_POST["nuevoCodigo"];

                    mkdir($directorio, 0755);

                    // se aplican funciones de acuerdo al tipo de imagen
                    if($_FILES["nuevaImagen"]["type"] == "image/jpeg") {

                        // Guardar imagen en el directorio
                        $aleatorio = mt_rand(100,999);

                        $ruta = "vistas/img/productos/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";

                        $origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);

                    }

                    if($_FILES["nuevaImagen"]["type"] == "image/png") {

                        // Guardar imagen en el directorio
                        $aleatorio = mt_rand(100,999);

                        $ruta = "vistas/img/productos/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";

                        $origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagepng($destino, $ruta);

                    }

                }

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