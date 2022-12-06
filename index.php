<?php
    require_once"./config/APP.php";
    require_once"./controladores/VistasControlador.php";
    $plantilla = new VistasControlador();
    $plantilla->obtener_platilla_controlador();
    ?>