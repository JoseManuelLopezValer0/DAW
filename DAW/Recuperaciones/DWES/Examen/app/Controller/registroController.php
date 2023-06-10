<?php
class registro {
    private $sesion;
    private $db;

    public function __construct()
    {
        $this->sesion = array();
        $this->db = new PDO('mysql:host=localhost;dbname=dwes_centromedico', "root", "");
    }

    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function registro($nombre, $apellidos, $dni, $email, $password, $telefono, $direccion, $ciudad, $cp, $fecha_nacimiento, $sexo, $tipo_usuario)
    {
        self::setNames();
        $sql = "INSERT INTO usuarios (nombre, apellidos, dni, email, password, telefono, direccion, ciudad, cp, fecha_nacimiento, sexo, tipo_usuario) VALUES ('" . $nombre . "', '" . $apellidos . "', '" . $dni . "', '" . $email . "', '" . $password . "', '" . $telefono . "', '" . $direccion . "', '" . $ciudad . "', '" . $cp . "', '" . $fecha_nacimiento . "', '" . $sexo . "', '" . $tipo_usuario . "')";
        $result = $this->db->query($sql);
        return $result;
    }
}