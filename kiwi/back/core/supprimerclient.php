<?php 
	require_once("../../config.php");
	class clients
	{
		
			public function supprimerclient($cin)
			{
			$sql="DELETE FROM client where cin= :cin";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':cin',$cin);
		
            $req->execute();
	
	}	
	}
?>