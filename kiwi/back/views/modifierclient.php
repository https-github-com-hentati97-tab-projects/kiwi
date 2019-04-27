<?php
require_once "../entities/client.php";
require_once "../core/client.php";
$test=0;
if(isset($_POST['modif']))
{
$cin=$_POST['cin'];
$nom=$_POST['nomcl'];
$nomc=$_POST['nomc'];
$tel=$_POST['tell'];
$adresse=$_POST['adr'];
$motdepasse=$_POST['mdp'];
$mail=$_POST['maill'];
}
else if(isset($_POST['modifier']))
{
$mail=0;
$count=0;
$cin=0;
$tel=0;
$nomc=0;

for($i=0;$i<strlen($_POST['mail']);$i++)
{
	if($_POST['mail'][$i]=="@")
	{
		$mail++;
	}
}
for($i=0;$i<strlen($_POST['motdepasse']);$i++)
{
	$count++;
}
if (ctype_digit($_POST['cin']))
{
$cin=0;
}
else
{
	$cin++;
}
if (ctype_digit($_POST['telephone']))
{
$tel=0;
}
else
{
	$tel++;
}
if(ctype_alpha($_POST['nomclient']))
{
	$nomc=0;
}
else
{
	$nomc++;
}

if(($mail==1)&&($cin==0)&&($tel==0)&&($nomc==0))
{
$clientt=new clientr();
$datee=date('d/m/Y');
$session="activer";
$client1= new client($_POST['nomclient'],$_POST['cin'],$_POST['mail'],$_POST['telephone'],$_POST['adresse'],$_POST['motdepasse'],$datee,$session);
$clientt->modifierclient($client1,$_POST['cin']);
$test=1;
}
else
{
	require_once("ajoutclient.php");
	if(($mail==0)||($mail>1))
	{
	echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Adresse mail
                <strong class='green'>invalide</strong>
                </center></div>";
    }
    if($count<7)
    {
    	echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le mot de passe saisi est
                <strong class='green'>trop court</strong>
                </center></div>";
    }
    if($cin>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le numéro de la carte d'identité doit contenir que
                <strong class='green'>des chiffres</strong>
                </center></div>";
    }
    if($tel>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le numéro du téléphone doit contenir que
                <strong class='green'>des chiffres</strong>
                </center></div>";
    }
    if($nomc>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le nom du client doit contenir que
                <strong class='green'>des lettres</strong>
                </center></div>";
    }
    
}
}
require_once("ajoutclient.php");
?>
