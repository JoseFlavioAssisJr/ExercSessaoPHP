<?php

session_start();

$login = $_REQUEST ["login"];
$senha = $_REQUEST ["senha"];


if (($login == "labweb") && ($senha == "cesjf1234")){
    
    $_SESSION["disciplina"] = "Laboratório WEB - CESJF";
    $_SESSION["login"] = $login;
    
header("Location:Bemvindo.php"); } 
else 
   
    header("Location:index.php?erro");



?>



