<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 25/04/2018
 * Time: 22:51
 */
class livraison
{
    public $ID_Livreur;
    public $ID_Commande;
    public $Montant;
    public $Adresse;
    public $Status;
    public $ID_Livraison;
    function __construct()
    {
    }

    public function getID_Livreur()
    {
        return $this->ID_Livreur;
    }

    public function setID_Livreur($ID_Livreur)
    {
        $this->ID_Livreur = $ID_Livreur;
    }

    public function getID_Commande()
    {
        return $this->ID_Commande;
    }

    public function setID_Commande($ID_Commande)
    {
        $this->ID_Commande = $ID_Commande;
    }

    public function getMontant()
    {
        return $this->Montant;
    }

    public function setMontant($Montant)
    {
        $this->Montant = $Montant;
    }
}