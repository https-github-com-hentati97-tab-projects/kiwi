<?php
require "../entities/client.php";
require_once "../core/client.php";
if(isset($_POST['modifier']))
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
$clientt=new clientc();
$datee=date('d/m/Y');
$session="activer";
$client1= new client($_POST['nomclient'],$_POST['cin'],$_POST['mail'],$_POST['telephone'],$_POST['adresse'],$_POST['motdepasse'],$datee,$session);
$clientt->modifierclient($client1,$_POST['cin']);
session_start();
session_unset();
//session_destroy();
//session_start();
$_SESSION['nomclient']=$_POST['nomclient'];
$_SESSION['cin']=$_POST['cin'];
$_SESSION['motdepasse']=$_POST['motdepasse'];

$_SESSION['mail']=$_POST['mail'];
$_SESSION['telephone']=$_POST['telephone'];
$_SESSION['adresse']=$_POST['adresse'];
$_SESSION['active'] = 1;
}
else
{
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
require_once("profilclient.php");
?>
