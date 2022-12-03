<?php
# Importar modelo de abstracción de base de datos
require_once('DBAbstractModel.php');
class Equipos extends DBAbstractModel
{
    /*CONSTRUCCIÓN DEL MODELO SINGLETON*/
    private static $instancia;
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }
    private $id;
    private $nombre;
    private $created_at;
    private $updated_at;
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }

    //set
    public function set($equipo_data = array())
    {
        //Control de inserción.
        if (array_key_exists('id', $equipo_data)) {
            $this->get($equipo_data['id']);
            if ($equipo_data['id'] != $this->id) {
                foreach ($equipo_data as $campo => $valor) {
                    $$campo = $valor;
                }
                $this->query = "INSERT INTO equipos(id, nombre) VALUES(:id, :nombre)";
                $this->parametros['id'] = $id;
                $this->parametros['nombre'] = $nombre;
                $this->get_results_from_query();
                $this->mensaje = 'Equipo añadido.';
            } else {
                $this->mensaje = 'El equipo ya existe.';
            }
        } else {
            $this->mensaje = 'No se ha podido agregar al equipo.';
        }
    }

    //get
    public function get($id = '')
    {
        if ($id != '') {
            $this->query = "SELECT * FROM equipos WHERE id = :id";
            $this->parametros['id'] = $id;
            $this->get_results_from_query();
        }
        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;
            }
            $this->mensaje = 'Equipo encontrado.';
        } else {
            $this->mensaje = 'Equipo no encontrado.';
        }
    }

    //edit
    public function edit($equipo_data = array())
    {
        foreach ($equipo_data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "UPDATE equipos SET nombre = :nombre WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->parametros['nombre'] = $nombre;
        $this->get_results_from_query();
        $this->mensaje = 'Equipo modificado.';
    }

    //delete
    public function delete($id = '')
    {
        $this->query = "DELETE FROM equipos WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        $this->mensaje = 'Equipo eliminado.';
    }

}
