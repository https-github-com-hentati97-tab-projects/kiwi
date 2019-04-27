<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require_once "../core/client.php";
if(isset($_POST['envoyer']))
{
$clientt=new clientc();
$client=$clientt->rechercheclient($_POST['mail'],$_POST['cin']);
if(($client['mail']==$_POST['mail'])&&($client['cin']==$_POST['cin']))
{
$to = $_POST['mail'];
$subject = "Récupération mot de passe";
$txt = "Votre mot de passe est: ".$client['motdepasse'];
$headers = "";

mail($to,$subject,$txt,$headers);
}
	else
        		{
        			echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Erreur le mail ou le cin saisi sont erronées
                </div>";
        		}
}
require_once("lostmdp.php");
?>
<body>
</body>
</html>
