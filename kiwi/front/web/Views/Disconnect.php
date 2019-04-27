<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 26/04/2018
 * Time: 01:55
 */
session_start();

session_destroy();
session_unset();

header("Location: login.php");