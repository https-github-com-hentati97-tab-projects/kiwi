<?php 
	include "../../config.php";
	class connectdec
	{
		public function deconnexionclient()
			{
				$status="off";
				$mail="on";
				$sql="UPDATE `client` SET `status`=:status WHERE status = '".$mail."' ;";		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":status",$status);
				$rep->execute();
        			echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Vous etez déconnecter 
                </div>";
        		
			}	
	}
?>