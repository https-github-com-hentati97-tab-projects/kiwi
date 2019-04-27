<?php 
	require_once("../../config.php");
	class clientr
	{
		
			public function ajouterclient($client)
			{
				$sql="INSERT INTO `client`(`nomclient`, `nomcommerce`, `cin`, `mail`, `telephone`, `adresse`, `motdepasse`, `datee`, `status`) VALUES (:nomclient,:nomcommerce,:cin,:mail,:telephone,:adresse,:motdepasse,:datee,:status);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":nomclient",$client->getnomclient());
				$rep->bindValue(":nomcommerce",$client->getnomcommerce());
				$rep->bindValue(":cin",$client->getcin());
				$rep->bindValue(":mail",$client->getmail());
				$rep->bindValue(":telephone",$client->gettelephone());
				$rep->bindValue(":adresse",$client->getadresse());
				$rep->bindValue(":motdepasse",$client->getmotdepasse());
				$rep->bindValue(":datee",$client->getdatee());
				$rep->bindValue(":status",$client->getstatus());
				$rep->execute();

				
			}
		
	}
?>