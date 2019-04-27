<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 01:09
 */
session_start();

if(isset($_SESSION["Username"]))
{
include "../Core/livraisonC.php";
$livraisonCore=new livraisonC();

$livraison=$livraisonCore->getLivraison($_GET["ref"]);
$livraisonCore->updateLivreurIDFree($livraison[0]["ID_Livreur"]);
$livraisonCore->delete($_GET["ref"]);

header("Location: AfficherLivreur.php");
}
else {
    header("Location: login.php");
}?>
