<?php
/**
 * 
 * Documentacion
 * 
 * @author: Jose Manueñl
 * @version: 1.0
 */
 
 function conectaDB(){
    try {
        $dsn ='mysql:host='. LOCALHOST .';dbname=' . DBNAME;
        $db = new PDO('mysql:host='. LOCALHOST .';dbname='. DBNAME, 'root' , '' );
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
        return($db);
    } catch (PDOException $e) {
        print "Error! <BR>";
        exit();
    }
}
