<?php 
	require_once("../../config.php");
	class tendanceaff
	{
		public function affichertendancee()
			{
				$sql="SELECT * FROM `tendance`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>