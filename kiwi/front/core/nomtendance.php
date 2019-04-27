<?php 
	include "../../config.php";
	class tendancenom
	{
		public function nomtendance()
			{
				$sqll="select * from tendance"; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetchall();
				
				/*$repp=$connexion->query($sql);
				$n=$repp->execute();*/
				
				return $donnees;		
	}	
	}
?>