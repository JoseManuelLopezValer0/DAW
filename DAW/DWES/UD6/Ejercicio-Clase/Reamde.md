Actividad guiada.
Escenario: Club Baloncesto Pokemons y venta de entradas.

1. Base de datos.
   1. Crea una base de datos Mysql utilizando cualquier cliente.
   2. Crea un usuario con todos los permisos para la base de datos creada anteriormente.
   3. Crea la tabla equipos con los siguientes campos.
      1. id. Primary key; autoincrementable.
      2. nombre. Varchar(64); no permite null; único.
      3. created_at. Timestamp; valor por defecto fecha y hora actual.
      4. updated_at. Timestamp; valor por defecto null.
2. Estructura del proyecto.
   1. Crea un directorio para el proyecto.
   2. Crea la siguiente estructura de subdirectorios.

      - app
        - Config
        - Models
      - public
        - assets
        - css
        - img
        - js
      - test

3. Autocarga de clases.
   1. Instala composer.
   2. Crea en el raíz del proyecto el fichero composer.json para generar la autocarga de clases según el estándar PSR-4.
        
          {
          "autoload": {
                "psr-4": {
                   "App\\": "app/"
                   }
                },
                "require":{
                }
          }
4. Configuración de parámetros.
   1. Añade la librería vlucas/phpdotenv
   » php composer.phar require vlucas/phpdotenv
   2. ¿Qué directorio se ha creado?
   3. Crea en el directorio raíz del proyecto el fichero .env con el siguiente contenido.
   
            DB_HOST="localhost"
            DB_NAME="name_bd"
            DB_USER="user_name"
            DB_PASS="user_pass"
            DB_PORT="3306"
5. Modelo de datos.
   1.  Clase DBAbstractModel
       1.  Crea en el directorio Models la clase DBAbstractModel.
       2.  Define su espacio de nombres.
       3.  Define un método para devolver el mensaje.
       4.  Modifica el método getResultsFromQuery para que devuelva true o false, en función del resultado de la consulta.
   2.  Clase Equipos
       1.  Crea en el directorio Models la clase Equipos utilizando el patrón de diseño singleton
       2.  Implementa el método set para persistir un nuevo objeto en la base de datos.
       3.  Implementa el método get para recuperar un equipo de la base de datos por su clave primaria.
       4.  Implementa el método edit para modificar un objeto de la base de datos. Crea un objeto DateTime para actualizar el campo updated_at.
       5.  Implementa el método del para borrar un objeto de la base de datos.
6.  Test
    1.  Crea en el directorios tests el fichero test_equipos.php para comprobar el comportamiento
   de la clase. Utiliza la variable mensaje para ir mostrando el resultado de las operaciones.
        1.  Incluye la configuración inicial.
                
                require_once('../vendor/autoload.php');
                use Dotenv\Dotenv;
                use App\Models\Equipo;

                session_start();
                ini_set('display_errors',1);
                ini_set('display_starup_error',1);
                error_reporting(E_ALL);

                $dotenv = Dotenv::createImmutable(__DIR__.'/..');
                $dotenv->load();
                define('DBHOST', $\_ENV['DB_HOST']);
                define('DBUSER', $\_ENV['DB_USER']);
                define('DBPASS', $\_ENV['DB_PASS']);
                define('DBNAME', $\_ENV['DB_NAME']);
                define('DBPORT', $\_ENV['DB_PORT']);
        2. Crea un objeto equipo.
        3. Prueba los distintos métodos de la clase.
           1. Añada un nuevo equipo.
           2. Recupera y muestra un equipo.
           3.  Modifica el nombre de un equipo.
           4.  Recupera y muestra el equipo modificado.
           5.  Borra un equipo
           6.  Intenta recuperar y mostrar el equipo borrado.
           7.  Intenta añadir un equipo que ya exista.
           8.  Intenta poner a un equipo el nombre de otro equipo.
7.  Modifica la aplicación inicial CRUD sin autenticación, utilizando las clases creadas.