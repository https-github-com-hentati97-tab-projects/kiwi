<?php
require_once "../core/client.php";
//echo $_POST['mail'];

$clientt=new clientc();
$clientt->deconnexionclient();
require_once("index.php");
?>
