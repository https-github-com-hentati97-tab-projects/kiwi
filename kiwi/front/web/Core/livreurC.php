<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 25/04/2018
 * Time: 23:46
 */
require '../config.php';
class livreurC{


    public function addlivreur($livreur)
    {
        $db = config::getConnexion();
        $req = $db->query("insert into Livreur (CIN,Nom,Prenom,Date_Naiss) Values ('".$livreur->CIN."','".$livreur->Nom."','".$livreur->Prenom."','".$livreur->DateNaiss."')");

    }
    public  function GetListlivreur()
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Livreur");
        return $req ;

    }


    public  function Getlivreur($id)
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Livreur WHERE ID_Livreur=$id ");
        return $req->fetchAll() ;

    }



    public  function savesinglelivreur($id,$livreur)
    {
        $db = config::getConnexion();
        $req = $db->query("update Livreur set  Nom='".$livreur->Nom."',Prenom='".$livreur->Prenom."',Date_Naiss='".$livreur->DateNaiss."' , Status ='".$livreur->Status."' WHERE ID_Livreur=$id");
    }

    public  function deletelivreur($id)
    {

        $db = config::getConnexion();
        $req=$db->query("DELETE FROM Livreur WHERE ID_Livreur=$id");
    }

    public function CountLivreurLibre()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM Livreur Where Status='Libre'");
        return $req1->rowCount();
    }

    public function CountLivreurConge()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM Livreur Where Status='Conge'");
        return $req1->rowCount();
    }
    public function CountLivreurEnLivraison()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM Livreur Where Status='En Livraison'");
        return $req1->rowCount();
    }
}