<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";
    
require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxProductos{

// Generar el código a partir de la categoría
    public $idCategoria;

    public function ajaxCrearCodigoProducto(){

  	$item = "id_categoria";
  	$valor = $this->idCategoria;

  	$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
  	echo json_encode($respuesta);

  }

// Editar productos
	public $idProducto;
 	public $traerProductos;
 	public $nombreProducto;

    public function ajaxEditarProducto(){

    if($this->traerProductos == "ok"){

    $item = null;
    $valor = null;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
    echo json_encode($respuesta);


    }else if($this->nombreProducto != ""){

    $item = "descripcion";
    $valor = $this->nombreProducto;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
    echo json_encode($respuesta);

    }else{

    $item = "id";
    $valor = $this->idProducto;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
    echo json_encode($respuesta);

    }

  }

}



// Generar el código a partir de la categoría
if(isset($_POST["idCategoria"])){

	$codigoProducto = new AjaxProductos();
	$codigoProducto -> idCategoria = $_POST["idCategoria"];
	$codigoProducto -> ajaxCrearCodigoProducto();

}

// Editar Producto
if(isset($_POST["idProducto"])){

	$editarProducto = new AjaxProductos();
	$editarProducto -> idProducto = $_POST["idProducto"];
	$editarProducto -> ajaxEditarProducto();
  
}