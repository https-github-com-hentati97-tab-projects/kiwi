<?php 
	require_once("../../config.php");
	class clienta
	{
		public function afficherclient()
			{
				$sql="SELECT * FROM `client`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>