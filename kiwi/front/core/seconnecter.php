<?php 
	include "../../config.php";
	class connectc
	{
		public function connexionclient($mail,$motdepasse)
			{
				$status="on";
				$sqll="select * from client where mail='".$mail."' and motdepasse='".$motdepasse."'"; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();
				//echo $donnees['mail'];
				//echo $donnees['status'];
				if(($donnees['mail']==$mail)&&($donnees['motdepasse']==$motdepasse)&&($donnees['status']=="off"))
				{
				$sql="UPDATE `client` SET `status`=:status WHERE mail = '".$mail."' ;";		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":status",$status);
				$rep->execute();
				}
				$sqlll="select * from client where mail='".$mail."' and motdepasse='".$motdepasse."'"; 
				$connexion=config::getConnexion();
				$reppp=$connexion->query($sqlll);
				$donne = $reppp->fetch();
        		if($donne['status']=="on")
        		{
        			echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Bienvenue 
                <strong class='green'>".$donnees['nomclient']."</strong> vous etez connecter
                </div>";
        		} 
        		else if ($donne['status']=="desactiver")
        		{

        			echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Votre compte est désactivé 
                </div>";
        		}
        		else 
        		{
        			echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Erreur de connexion le mail ou le mot de passe sont erronées 
                </div>";
        		}
        		
				
				
				/*$i=0;
				$sql="select * from client where mail='".$mail."' and motdepasse='".$motdepasse."'"; 
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				$rep->execute();
				 if (empty($rep))
          			{
          					echo "1";
          			}
         		 else {
         		 	echo "2";
           			$sqll="UPDATE `client` SET `status`=:status WHERE motdepasse = '".$motdepasse."' ;";
					$status="on";
					$repp=$connexion->prepare($sql);
					$repp->bindValue(":status",$status);
					$repp->execute();
					 }
					}*/
	}	
	}
?>