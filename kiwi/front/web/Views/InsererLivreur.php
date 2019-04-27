<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 25/04/2018
 * Time: 23:42
 */
session_start();

if(isset($_SESSION["Username"]))
{
include  '../Core/livreurC.php';
include  '../Entities/livreur.php';


$livreurCore=new livreurC();
$livreur=new livreur();


$livreur->CIN=$_POST["cin"];

$livreur->Nom=$_POST["nom"];

$livreur->Prenom=$_POST["prenom"];

$livreur->DateNaiss=$_POST["datenaiss"];

$livreurCore->addlivreur($livreur);
header("Location: AfficherLivreur.php");
}
else {
    header("Location: login.php");
}?>
