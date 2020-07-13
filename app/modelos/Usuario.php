<?php

class Usuario
{
    private $__db;

    public function __construct()
    {
        $this->__db = Conexion::getInstance();
    }

    public function ObtenerUsuarios()
    {
        $this->__db->query("SELECT * FROM USUARIOS");
        $resultados = $this->__db->registros();

        return $resultados;
    }

    public function agregarUsuario($datos)
    {
        $this->__db->query("INSERT INTO USUARIOS (NOMBRE, EMAIL, TELEFONO) VALUES (:nombre, :email, :telefono)");
        # code...
        $this->__db->bind(":nombre", $datos["nombre"]);
        $this->__db->bind(":email", $datos["email"]);
        $this->__db->bind(":telefono", $datos["telefono"]);

        if ($this->__db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerUsuarioId($id)
    {
        $this->__db->query("SELECT * FROM USUARIOS WHERE ID_USUARIO = :id");
        $this->__db->bind(":id", $id);

        $fila = $this->__db->registro();
        return $fila;
    }

    public function actualizarUsuario($datos)
    {
        $this->__db->query("UPDATE USUARIOS SET NOMBRE = :nombre, EMAIL = :email, TELEFONO = :telefono WHERE ID_USUARIO = :id");

        $this->__db->bind(":id", $datos["id_usuario"]);
        $this->__db->bind(":nombre", $datos["nombre"]);
        $this->__db->bind(":email", $datos["email"]);
        $this->__db->bind(":telefono", $datos["telefono"]);

        if ($this->__db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function borrarUsuario($datos)
    {
        $this->__db->query("DELETE FROM USUARIOS WHERE ID_USUARIO = :id");

        $this->__db->bind(":id", $datos["id_usuario"]);

        if ($this->__db->execute()) {
            return true;
        } else {
            return false;
        }}
}
