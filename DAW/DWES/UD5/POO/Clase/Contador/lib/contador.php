<?php
/**
 * 
 * Documentación
 * 
 * @autor Jose Manuel
 * @version 1.0
 */

class Contador {
    private static $contador = 0;
    private static $contadoresInstanciados = 0;
    
    public function __construct() {
        self::$contador = 0;
        self::$contadoresInstanciados++;
    }
    
    public static function incrementar() {
        self::$contador++;
        return self::$contador;
    }
    
    public static function reiniciar() {
        self::$contador = 0;
        return self::$contador;
    }
    
    public static function mostrar() {
        return self::$contador;
    }
    
    public static function getContadoresInstanciados() {
        return self::$contadoresInstanciados;
    }

    public function __destruct() {
        self::$contador = 0;
        self::$contadoresInstanciados--;
    }
}