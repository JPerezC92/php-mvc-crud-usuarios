
<?php

// Clase controlador principal
// Se encarga de poder cargar los modelos y las vistas

class Controlador
{

// cargar modelo
    public function modelo($modelo)
    {
        // carga
        require_once "../app/modelos/" . $modelo . ".php";

        // Instanciar modelo
        return new $modelo;
    }

    public function vista($vista, $datos = [])
    {
        // chequear si el archivo vista existe

        if (file_exists("../app/vistas/" . $vista . ".php")) {

            require_once "../app/vistas/" . $vista . ".php";

        } else {
            // Si el archivo de la vista no existe
            die("La vista no existe");
        }
    }

}
