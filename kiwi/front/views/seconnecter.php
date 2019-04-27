<?php
require_once "../core/client.php";
//echo $_POST['mail'];
$mail=0;
for($i=0;$i<strlen($_POST['mail']);$i++)
{
	if($_POST['mail'][$i]=="@")
	{
		$mail++;
	}
}
if($mail==1)
{
$clientt=new clientc();
$clientt->connexionclient($_POST['mail'],$_POST['motdepasse']);
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
               Adresse mail
                <strong class='green'>invalide</strong>
                </div>";
    }
   }
require_once("index.php");
?>
