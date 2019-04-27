<?php 
	require_once("../../config.php");
	class clientd
	{
		
			public function desactiverclient($cin)
			{
				
 
 				$sql="UPDATE client SET status = 'desactiver' WHERE cin = '".$cin."' ";
  				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
				$rep->execute();
			}
		
	}
?>