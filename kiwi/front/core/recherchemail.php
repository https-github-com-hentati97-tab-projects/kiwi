<?php 
	include "../../config.php";
	class mailc
	{
		public function rechercheclient($mail,$cin)
			{
				$sqll="select * from client where mail='".$mail."' and cin='".$cin."'"; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();
        		
        			return $donnees;
        	
 }
}
 ?>	