<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";
    
    class AjaxUsuarios{

        // Editar usuarios

        public $idUsuario;
        public function ajaxEditarUsuario(){

            $item = "id";
            $valor = $this->idUsuario;

            $respuesta = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

            echo json_encode($respuesta);

        }

        // Activar Usuario
        public $activarUsuario;
        public $activarId;        
        
        public function ajaxActivarUsuario(){

            $tabla = "usuarios";

            $item1 = "estado";
            $valor1 = $this->activarUsuario;

            $item2 = "id";
            $valor2 = $this->activarId;

            $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

        }

        // Comprobar que no exista el nombre de usuario en la bd
        public $validarUsuario;
        
        public function ajaxValidarUsuario(){

            $item = "usuario";
            $valor = $this->validarUsuario;

            $respuesta = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

            echo json_encode($respuesta);

        }

    }

// Editar Usuario
if(isset($_POST["idUsuario"])){

    $editar = new AjaxUsuarios();
    $editar -> idUsuario = $_POST["idUsuario"];
    $editar -> ajaxEditarUsuario();

}

// Activar Usuario
if(isset($_POST["activarUsuario"])){

    $activarUsuario = new ajaxUsuarios();
    $activarUsuario -> activarUsuario = $_POST["activarUsuario"];
    $activarUsuario -> activarId = $_POST["activarId"];
    $activarUsuario -> ajaxActivarUsuario();

}

// Comprobar que no exista el nombre de usuario en la bd
if(isset($_POST["validarUsuario"])){

    $valUsuario = new ajaxUsuarios();
    $valUsuario -> validarUsuario = $_POST["validarUsuario"];
    $valUsuario -> ajaxValidarUsuario();

}


    

    