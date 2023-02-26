<?php 
session_start();
$user = $_SESSION["user"];
//print_r($_SESSION);
echo  "Welcome $user";
?>