<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 11/04/2018
 * Time: 14:13
 */
class config {
    private static $instance = NULL;

    public static function getConnexion() {
        if (!isset(self::$instance)) {
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=Yasmine', 'root', 'root');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>