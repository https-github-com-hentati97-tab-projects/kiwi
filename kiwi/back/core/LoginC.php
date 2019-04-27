<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 01:43
 */
require '../../config.php';

class LoginC
{


    public function connect($login)
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM users WHERE Username='".$login->Username."' AND Password='".$login->Password."'");
        return $req->fetchAll() ;
    }
}