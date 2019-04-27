<?php
include "../../config.php";
    class admin
    {
public function connexionadmin($id,$motdepasse)
      {
        $i=0;
          session_start(); 
        $sqll="select * from admin where identifiant='".$id."' and motdepasse='".$motdepasse."'"; 
        $connexion=config::getConnexion();
        $repp=$connexion->query($sqll);
        $donnees = $repp->fetch();
        //echo $donnees['mail'];
        //echo $donnees['status'];
        if(($donnees['identifiant']==$id)&&($donnees['motdepasse']==$motdepasse))
        {     
        $_SESSION['identifiant']=$donnees['identifiant'];
        $_SESSION['motdepasse']=$donnees['motdepasse'];
        $_SESSION['active']=1;
        $i++;
        }
        else
        {
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               
                <strong class='green'></strong> Probléme de connexion
                </div>";
        }
        return $i;
    }
     public function deconnexion()
      {
        session_start(); 
        session_unset();
            session_destroy();
              echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Vous etez déconnecter 
                </div>";
            
      }
      public function modifier($id,$mdp)
      {
        $sql="UPDATE `admin` SET `motdepasse`=:motdepasse WHERE identifiant = '".$id."' ;";
  
    
        $connexion=config::getConnexion();
        $rep=$connexion->prepare($sql);
        $rep->bindValue(":motdepasse",$mdp);
        $rep->execute();
      }
}
?>