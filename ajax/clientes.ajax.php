<?php
    
require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes{

 //Editar Clientes
 public $idCliente;

 public function ajaxEditarCliente(){

     $item = "id";
     $valor = $this->idCliente;

     $respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);
     echo json_encode($respuesta);

 }

}


//Editar Clientes
if(isset($_POST["idCliente"])){

	$cliente = new AjaxClientes();
	$cliente -> idCliente = $_POST["idCliente"];
	$cliente -> ajaxEditarCliente();

}