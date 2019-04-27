<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 01:48
 */
include  '../Core/LoginC.php';
include  '../Entities/login.php';

session_start();
$loginCore=new LoginC();
$login=new login();


$login->Username=$_POST["username"];

$login->Password=$_POST["password"];


$result=$loginCore->connect($login);
if(!empty($result))
{
if($result[0]["Username"]==$login->Username) {
    $_SESSION["Username"] = $login->Username;
    header("Location: AfficherLivraison.php");
}
}else
{
    header("Location: login.php");
}
