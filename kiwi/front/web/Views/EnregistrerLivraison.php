<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 01:29
 */
session_start();

if(isset($_SESSION["Username"]))
{
include  '../Core/livraisonC.php';
include  '../Entities/livraison.php';
$livraisonCore=new livraisonC();
$livraison=new livraison();


$livraison->Status=$_POST["status"];
$livraison->ID_Livraison=$_POST["id"];


$livraisonCore->updatelivraison($livraison);
header("Location: AfficherLivraison.php");
}
else {
    header("Location: login.php");
}?>
