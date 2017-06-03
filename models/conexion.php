<?php

class Conexion {
    
    private static $cont;
    
    public static function conectar()
    {
        if ( null == self::$cont )
        {     
            try
            {
              self::$cont = new PDO("mysql:host=localhost;dbname=practice", "root", "9vs.sheriff");
            }
            catch(PDOException $e)
            {
              die($e->getMessage()); 
            }
        }
        return self::$cont;
    }
}

?>