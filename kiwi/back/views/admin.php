<?php
require_once "../core/admin.php";
//echo $_POST['mail'];
$v=0;
$ad=new admin();
$v=$ad->connexionadmin($_POST['id'],$_POST['mdp']);
if($v==0)
require_once("signin.php");
else
include("index.php");
?>
