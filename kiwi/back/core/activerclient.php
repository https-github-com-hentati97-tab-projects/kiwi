<?php 
	require_once("../../config.php");
	class clientac
	{
		
			public function activerclient($cin)
			{
				
 
 				$sql="UPDATE client SET status = 'off' WHERE cin = '".$cin."' ";
  				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
				$rep->execute();
			}
		
	}
?>