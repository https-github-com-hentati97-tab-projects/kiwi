<?php 
	include "../config.php";
	class Employec
	{
			public function afficheremploye($e)
			{
		echo "le cin de l'employé est: ".$e->getcin()." son nom est: ".$e->getnom()." son prenom est : ".$e->getprenom()." le tarif est : ".$e->gettarif()." le nombres d'heures est : ".$e->getnbheures()."<br>";
			}

			public function calculersalaire($e)
			{
				$salaire=$e->gettarif()*$e->getnbheures();
				echo "le salaire est : ".$salaire."<br>";
			}
			public function ajouteremployer($employe)
			{
				$sql="INSERT INTO `employe` (`cin`, `nom`, `prenom`, `nbheures`, `tarif`) VALUES (:cin,:nom,:prenom,:nbheures,:tarif);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":cin",$employe->getcin());
				$rep->bindValue(":nom",$employe->getnom());
				$rep->bindValue(":prenom",$employe->getprenom());
				$rep->bindValue(":nbheures",$employe->getnbheures());
				$rep->bindValue(":tarif",$employe->gettarif());
				$rep->execute();
			}
			public function afficheremployerbase()
			{
				$sql="SELECT * FROM `employe`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
			public function modifieremploye($cin,$nom,$prenom,$nbheures,$tarif)
			{
				$sql="UPDATE `employe` SET `cin`=:cin,`nom`=:nom,`prenom`=:prenom,`nbheures`=:nbheures,`tarif`=:tarif WHERE `cin`=:cin";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
         $rep->bindValue(":cin",$cin);
         $rep->bindValue(":nom",$nom);
         $rep->bindValue(":prenom",$prenom);
         $rep->bindValue(":nbheures",$nbheures);
         $rep->bindValue(":tarif",$tarif);
          $rep->execute();
			}
	}

?>