<?php
# Importar modelo de abstracción de base de datos
require_once('DBAbstractModel.php');
class Superheroe extends DBAbstractModel
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
    private $velocidad;
    private $created_at;
    private $updated_at;
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }
    /*método para ver la implementación utilizando
el mecanismo de cargar los datos en la entidad y luego
persistirlos.
*/
    public function guardarenBD()
    {
        $this->query = "INSERT INTO superheroes(nombre, velocidad)
VALUES(:nombre, :velocidad)";
        //$this->parametros['id']= $id;
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['velocidad'] = $this->velocidad;
        $this->get_results_from_query();
        //$this->execute_single_query();
        $this->mensaje = 'Superhéroes añadido.';
    } #Crear un nuevo usuario
    public function set1($sh_data = array())
    {
        //Control de inserción.
        if (array_key_exists('id', $sh_data)) {
            $this->get($sh_data['id']);
            if ($sh_data['id'] != $this->id) {
                foreach ($sh_data as $campo => $valor) {
                    $$campo = $valor;
                }
                $this->query = "INSERT INTO superheroe(nombre, velocidad)
VALUES(:nombre, :velocidad)";
                //$this->parametros['id']= $id;
                $this->parametros['nombre'] = $nombre;
                $this->parametros['velocidad'] = $velocidad;
                $this->get_results_from_query();
                //$this->execute_single_query();
                $this->mensaje = 'SH añadido';
            } else {
                $this->mensaje = 'El sh ya existe';
            }
        } else {
            $this->mensaje = 'No se ha agregado sh';
        }
    }
    public function set($user_data = array())
    {
        foreach ($user_data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "INSERT INTO superheroes(nombre, velocidad)
VALUES(:nombre, :velocidad)";
        //$this->parametros['id']= $id;
        $this->parametros['nombre'] = $nombre;
        $this->parametros['velocidad'] = $velocidad;
        $this->get_results_from_query();
        //$this->execute_single_query();
        $this->mensaje = 'SH agregado correctamente';
    }
    /**
     * Método para traer un libro de la base de datos por clave primaria.
     * Carga los resultados en el array definido en la clase abstracta.
     * *@param int id. Identificador de la entidad.
     * @return datos.
     */
    public function get($id = '')
    {
        if ($id != '') {
            $this->query = "
SELECT *
FROM superheroes
WHERE id = :id";
            //Cargamos los parámetros.
            $this->parametros['id'] = $id;
            //Ejecutamos consulta que devuelve registros.
            $this->get_results_from_query();
        }
        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;
            }
            $this->mensaje = 'sh encontrado';
        } else {
            $this->mensaje = 'sh no encontrado';
        }
        return $this->rows;
    }
    # Modificar libro
    public function edit($user_data = array())
    {
        foreach ($user_data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "
UPDATE superheroes
SET nombre=:nombre,
velocidad=:velocidad
WHERE id = :id
";
        // $this->parametros['id']=$id;
        $this->parametros['nombre'] = $nombre;
        $this->parametros['velocidad'] = $velocidad;
        $this->get_results_from_query();
        $this->mensaje = 'sh modificado';
    } # Eliminar un usuario
    public function delete($id = '')
    {
        $this->query = "DELETE FROM superheroes
WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        $this->mensaje = 'SH eliminado';
    } #Método constructor
    function __construct()
    {
        // Singleton no recomienda parámetros ya que
        // podría dificultar la lectura de las instancias.
    }
}
