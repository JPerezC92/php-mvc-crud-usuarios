<?php

/*
Mapear la url ingresada en el navegador,
1-Controlador
2-Metodo
3-Parametro
Ejemplo: /articulos/actualizar/4
 */

class Core
{
    protected $_controladorActual = "Paginas";
    protected $_metodoActual      = "index";
    protected $_parametros        = [];

    // Constructor
    public function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();

        // Buscar en controladores si el controlador existe
        if (file_exists("../app/controladores/" . ucwords($url[0]) . ".php")) {

            // Si existe se setea como controlador por defecto
            $this->_controladorActual = ucwords($url[0]);

            // unset indice
            unset($url[0]);
        }

        // requerir el controlador
        require_once "../app/controladores/" . $this->_controladorActual . ".php";
        // echo $this->_controladorActual;

        $this->_controladorActual = new $this->_controladorActual;

        // Chequear segunda parte de la url que seria el metodo
        if (isset($url[1])) {

            if (method_exists($this->_controladorActual, $url[1])) {
                // Chequeamos el metodo
                $this->_metodoActual = $url[1];
                // unset indice
                unset($url[1]);
            }
        }

        // echo $this->_metodoActual;
        $this->_parametros = $url ? array_values($url) : [];

        // Llamar callback con parametros array
        call_user_func_array([
            $this->_controladorActual,
            $this->_metodoActual,
        ], $this->_parametros);
    }

    public function getUrl()
    {
        if (isset($_GET["url"])) {

            $url = rtrim($_GET["url"], "/");

            // echo $url;
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);

            return $url;

        } else {
            return $url = [""];
        }
    }

}
