<?php 

$command = $_POST["command"];
$rodada = $_POST["rodada"];
$liga;

    
$action = explode(".", $command);
session_start();
if($action[0] == "jogo"){
    
    if($_POST["liga"] == "Super"){
   $liga = 2; 
    }
else{
    $liga = 1;
    }
    
    
    $_SESSION["rodada"] = $rodada;
    $_SESSION["liga"] = $liga;
    $_SESSION["acao"] = $action[1];
    
     $redirect="../Action/JogoAction.php";
    header("Location:$redirect");
    
}