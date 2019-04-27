<?php 
	require_once("../../config.php");
	class clientre
	{
	public  function rechercherclient($n)
	{
   
   	/*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   	$sql="SELECT * FROM `client` WHERE cin = '".$n."' or mail ='".$n."' or nomclient ='".$n."' or nomcommerce ='".$n."' or telephone ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
}

 ?>