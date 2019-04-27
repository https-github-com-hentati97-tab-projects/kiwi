<?php
	require_once("../../config.php");
	class clientr
	{

			public function ajouterclient($client)
			{
				$sql="INSERT INTO `client`(`nomclient`,  `cin`, `mail`, `telephone`, `adresse`, `motdepasse`, `datee`, `status`) VALUES (:nomclient,:cin,:mail,:telephone,:adresse,:motdepasse,:datee,:status);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":nomclient",$client->getnomclient());

				$rep->bindValue(":cin",$client->getcin());
				$rep->bindValue(":mail",$client->getmail());
				$rep->bindValue(":telephone",$client->gettelephone());
				$rep->bindValue(":adresse",$client->getadresse());
				$rep->bindValue(":motdepasse",$client->getmotdepasse());
				$rep->bindValue(":datee",$client->getdatee());
				$rep->bindValue(":status",$client->getstatus());
				$rep->execute();


			}
			public function verifexist($client)
			{
				$i=0;
				$sql="SELECT * FROM `client` WHERE cin = '".$client->getcin()."' or mail ='".$client->getmail()."' or motdepasse ='".$client->getmotdepasse()."'  or telephone ='".$client->gettelephone()."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  				$donnees = $rep->fetch();
  				if($donnees['mail']==$client->getmail())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Adresse mail
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
  				if($donnees['cin']==$client->getcin())
  				{
  					 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Numéro carte d'identité
                <strong class='green'>deja existante</strong>
                </center></div>";
               $i=1;
  				}
  				if($donnees['motdepasse']==$client->getmotdepasse())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Mot de passe
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
  				if($donnees['telephone']==$client->gettelephone())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Numéro de téléphone
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
				return $i;
			}

      public function desactiverclient($cin)
      {


        $sql="UPDATE client SET status = 'desactiver' WHERE cin = '".$cin."' ";
          $connexion=config::getConnexion();
          $rep=$connexion->query($sql);
        $rep->execute();
      }
      public function modifierclient($client,$cin)
      {
        $sql="UPDATE `client` SET `nomclient`=:nomclient,`cin`=:cin,`mail`=:mail,`telephone`=:telephone,`adresse`=:adresse,`motdepasse`=:motdepasse WHERE cin = '".$cin."' ;";


        $connexion=config::getConnexion();
        $rep=$connexion->prepare($sql);
        $rep->bindValue(":nomclient",$client->getnomclient());

        $rep->bindValue(":cin",$client->getcin());
        $rep->bindValue(":mail",$client->getmail());
        $rep->bindValue(":telephone",$client->gettelephone());
        $rep->bindValue(":adresse",$client->getadresse());
        $rep->bindValue(":motdepasse",$client->getmotdepasse());
        $rep->execute();

      }
      public  function rechercherclient($n)
  {

    /*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
    $sql="SELECT * FROM `client` WHERE cin = '".$n."' or mail ='".$n."' or nomclient ='".$n."'  or telephone ='".$n."'";
          $connexion=config::getConnexion();
          $rep=$connexion->query($sql);

        $rep->execute();
            return $rep;

  }
  public function nbclient()
      {
        $sql="SELECT * FROM `client`";
        $connexion=config::getConnexion();
        $rep=$connexion->query($sql);
        return $rep;
      }
      public function supprimerclient($cin)
      {
      $sql="DELETE FROM client where cin= :cin";
      $db = config::getConnexion();
          $req=$db->prepare($sql);
      $req->bindValue(':cin',$cin);

            $req->execute();

  }
  public function activerclient($cin)
      {


        $sql="UPDATE client SET status = 'activer' WHERE cin = '".$cin."' ";
          $connexion=config::getConnexion();
          $rep=$connexion->query($sql);
        $rep->execute();
      }
      public function afficherclient()
      {
        $sql="SELECT * FROM `client`";
        $connexion=config::getConnexion();
        $rep=$connexion->query($sql);
        return $rep;
      }

	}
?>
