<?php
    require_once "./modelos/VistasModelo.php";
    class VistasControlador extends VistasModelo{
        /*---Controlador para obtener plantilla---*/ 
        public function obtener_platilla_controlador(){
            return require_once "./vistas/plantilla.php";
        }
        /*---Controlador para obtener vistas---*/ 
        public function obtener_vistas_controlador(){
            if(isset($_GET['views'])){
                $ruta=explode("/",$_GET['views']);
                $respuesta=VistasModelo::obtener_vistas_modelo($ruta[0]);
            }else{
                return $respuesta="login";
            }
            return $respuesta;
        }

    }
    ?>