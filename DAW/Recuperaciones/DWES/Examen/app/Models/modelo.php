<?php

class Service
{

    private $servicio;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname= dwes_centromedico', "root", "");
    }

    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios()
    {

        self::setNames();
        $sql = "SELECT id, nombre, precio FROM servicio";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
    }

    public function setServicio($nombre, $precio)
    {

        self::setNames();
        $sql = "INSERT INTO servicio(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}


class Registro
{

    private $registro;
    private $db;

    public function __construct()
    {
        $this->registro = array();
        $this->db = new PDO('mysql:host=localhost;dbname= dwes_centromedico', "root", "");
    }

    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function setRegistro($usuario, $password, $nombre)
    {

        self::setNames();
        $sql = "INSERT INTO usuarios(usuario, password, nombre) VALUES ('" . $usuario . "', '" . $password . "', '" . $nombre . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}