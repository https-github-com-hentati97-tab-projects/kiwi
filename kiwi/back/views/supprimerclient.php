<?php
require_once ("../core/client.php");
if(isset($_POST["supprimer"]))
{
$client=new clientr();
$client->supprimerclient($_POST["cin"]);
}
require_once("ajoutclient.php")
?>
