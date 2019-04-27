<?php 
	require_once("../../config.php");
	class statspromotion
	{
		public function nbpromotion()
			{
				$sql="SELECT * FROM `promotion`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>