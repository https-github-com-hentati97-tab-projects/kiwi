<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 25/04/2018
 * Time: 23:13
 */
session_start();

if(isset($_SESSION["Username"]))
{
include "../Core/livraisonC.php";
$livraisonCore=new livraisonC();


$livraisonCore->deletelivreur($_GET["ref"]);

header("Location: AfficherLivreur.php");
}
else {
    header("Location: login.php");
}?>
