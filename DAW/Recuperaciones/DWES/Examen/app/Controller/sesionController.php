<?php
class Sesion
{

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

    public function getCitas()
    {

        self::setNames();
        $sql = "SELECT especialidad, nombre AS medico, fecha_hora FROM citas JOIN medicos ON citas.medicos_id = medicos.id JOIN usuarios ON medicos.usuarios_id = usuarios.id join especialidades on medicos.especialidades_id = especialidades.id WHERE pacientes_id = " . $_SESSION['id'];
        $result = $this->db->query($sql);
        $citas = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $citas[] = $row;
        }
        return $citas;
    }

    public function getCitasListado()
    {

        self::setNames();
        $sql = "SELECT nombre AS paciente, fecha_hora FROM citas JOIN medicos ON citas.medicos_id = medicos.id JOIN usuarios ON medicos.usuarios_id = usuarios.id join especialidades on medicos.especialidades_id = especialidades.id WHERE medicos_id = " . $_SESSION['id'];
        $result = $this->db->query($sql);
        $citas = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $citas[] = $row;
        }
        return $citas;
    }
    public function getEspecialidades()
    {

        self::setNames();
        $sql = "SELECT id, especialidad FROM especialidades";
        $result = $this->db->query($sql);
        $especialidades = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $especialidades[] = $row;
        }
        return $especialidades;
    }

    public function getMedicos()
    {

        self::setNames();
        $sql = "SELECT medicos.id, nombre, especialidad FROM medicos JOIN especialidades ON medicos.especialidades_id = especialidades.id join usuarios on medicos.usuarios_id = usuarios.id";
        $result = $this->db->query($sql);
        $medicos = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $medicos[] = $row;
        }
        return $medicos;
    }

    public function getPacientes ()
    {

        self::setNames();
        $sql = "SELECT nombre FROM pacientes join usuarios on pacientes.usuarios_id = usuarios.id";
        $result = $this->db->query($sql);
        $pacientes = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $pacientes[] = $row;
        }
        return $pacientes;
    }
    public function getUsuarios ()
    {

        self::setNames();
        $sql = "SELECT id, nombre, usuario FROM usuarios";
        $result = $this->db->query($sql);
        $usuarios = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $usuarios[] = $row;
        }
        return $usuarios;
    }

    public function getSesion($usuario, $password)
    {

        self::setNames();
        $sql = "SELECT usuario, password, id FROM usuarios WHERE usuario = '" . $usuario . "' AND password = '" . $password . "'";
        $result = $this->db->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);



        if ($result) {
            $_SESSION['usuario'] = $result['usuario'];
            $_SESSION['password'] = $result['password'];
            $_SESSION['id'] = $result['id'];
            return true;
        } else {
            return false;
        }
    }


    public function setSesion($usuario, $password, $nombre)
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

    public function getPerfil($id)
    {

        if ($id == 21) {
            return "Administrador";
        }

        self::setNames();
        $sql = "SELECT usuarios_id FROM pacientes WHERE usuarios_id = '" . $id . "'";
        $result = $this->db->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);

        if ($result['usuarios_id'] == $id) {
            return "Paciente";
        }

        self::setNames();
        $sql = "SELECT usuarios_id FROM medicos  WHERE usuarios_id = '" . $id . "'";
        $result = $this->db->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);

        if ($result['usuarios_id'] == $id) {
            return "Medico";
        }
    }
}
