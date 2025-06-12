<?php
    class api {
        public function index() {
            // Redirige a la API de usuarios si se accede a "api" directamente

            echo "controlador de visitas".$controlador_vistas;
            require_once('api/usuarios.php');
                
        }
    }
?>
