<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 03/04/2018
 * Time: 03:22
 */
class livreur{

    public $CIN ;
    public $DateNaiss;
    public $Nom;
    public $Prenom;
    public $Status;

    public function getCIN(){
        return $this->CIN;
    }

    public function setCIN($CIN){
        $this->CIN = $CIN;
    }

    public function getDateNaiss(){
        return $this->DateNaiss;
    }

    public function setDateNaiss($DateNaiss){
        $this->DateNaiss = $DateNaiss;
    }

    public function getNom(){
        return $this->Nom;
    }

    public function setNom($Nom){
        $this->Nom = $Nom;
    }

    public function getPrenom(){
        return $this->Prenom;
    }

    public function setPrenom($Prenom){
        $this->Prenom = $Prenom;
    }



}