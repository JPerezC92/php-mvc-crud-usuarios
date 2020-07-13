<?php
// Clase para conectarse a la base de datos y ejecutar consultas PDO
class Conexion
{

    private static $__instance = null;

    private $__host        = DB_HOST;
    private $__usuario     = DB_USUARIO;
    private $__password    = DB_PASSWORD;
    private $__nombre_base = DB_NOMBRE;

    private $__dbh;
    private $__stmt;
    private $__error;

    public function __construct()
    {
        // Configurar conexion
        $dsn = "mysql:host=" . $this->__host . ";dbname=" . $this->__nombre_base;

        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
        );

        try {
            $this->__dbh = new PDO($dsn, $this->__usuario, $this->__password, $opciones);
            $this->__dbh->exec("set names utf8");
        } catch (PDOException $e) {

            $this->__error = $e->getMessage();
            echo $this->__error;
        }
    }

    // Preparamos la consulta
    public function query($sql)
    {
        $this->__stmt = $this->__dbh->prepare($sql);
    }

    // Vinculamos la consulta con Bind
    public function bind($parametros, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;

                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;

                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;

                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }

        $this->__stmt->bindValue($parametros, $valor, $tipo);
    }

    // Ejecuta la consulta
    public function execute()
    {
        return $this->__stmt->execute();
    }

    // Obtener los registros
    public function registros()
    {
        $this->execute();
        return $this->__stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Obtener un solo registro
    public function registro()
    {
        $this->execute();
        return $this->__stmt->fetch(PDO::FETCH_OBJ);
    }

    // Obtener cantidad de filas
    public function rowCount()
    {
        $this->execute();
        return $this->__stmt->rowCount(PDO::FETCH_OBJ);
    }

    public static function getInstance()
    {
        if (!isset(self::$__instance)) {
            $object           = __CLASS__;
            self::$__instance = new $object;
        }
        return self::$__instance;
    }
}
