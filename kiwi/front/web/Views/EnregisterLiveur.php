<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 00:12
 */

session_start();

if(isset($_SESSION["Username"]))
{
include  '../Core/livreurC.php';
include  '../Entities/livreur.php';


$livreurCore=new livreurC();
$livreur=new livreur();
//echo print_r($_POST);


$livreur->CIN=$_POST["cin"];

$livreur->Nom=$_POST["nom"];

$livreur->Prenom=$_POST["prenom"];

$livreur->DateNaiss=$_POST["datenaiss"];

$livreur->Status=$_POST["status"];

$livreurCore->savesinglelivreur($_POST["id"],$livreur);

header("Location: AfficherLivreur.php");
}
else {
    header("Location: login.php");
}?>
