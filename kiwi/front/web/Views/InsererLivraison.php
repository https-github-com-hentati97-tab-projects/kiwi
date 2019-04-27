<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 00:45
 */
session_start();

if(isset($_SESSION["Username"]))
{
include  '../Core/livraisonC.php';
include  '../Entities/livraison.php';


    require('../SMS/textlocal.class.php');

    $textlocal = new Textlocal('seifeddine.benfraj@esprit.tn', 'Azerty12');

    $numbers = array(21624552497);
    $sender = 'Seif';
    $message = 'A Delivery has been Added';







$livraisonCore=new livraisonC();
$livraison=new livraison();


$livraison->ID_Livreur=$_POST["livreur"];
$livraison->ID_Commande=$_POST["commande"];
$commande=$livraisonCore->getCommandeID($_POST["commande"]);
$livraison->Adresse=$commande[0]["Adresse"];
$Adresse=$livraisonCore->SelectFraisAdresse($commande[0]["Adresse"]);
$Frais=$Adresse[0]["Region_Frais"];
$livraison->Montant=(int)$commande[0]["Montant"]+(int)$Frais;
$livraisonCore->insertNewLivraison($livraison);
$livraisonCore->updateCommandeID($_POST["commande"]);
$livraisonCore->updateLivreurID($_POST["livreur"]);
//$result = $textlocal->sendSms($numbers, $message, $sender);


header("Location: AfficherLivraison.php");
}
else {
    header("Location: login.php");
}?>
