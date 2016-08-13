<?php
require_once 'C:/xampp/htdocs/LigaArua/DAO/JogoDAO.php';
require_once 'C:/xampp/htdocs/LigaArua/DAO/ClubeDAO.php';
session_start();
$reflection = null;
class JogoAction {
 
    
    static function invoke_method() {

        if (method_exists(new JogoAction(), $_SESSION["acao"])) {
            $reflection = new ReflectionClass('JogoAction');
            $reflection->getMethod($_SESSION["acao"])->invoke(new JogoAction());
        }
        else{
            echo "Method ".$_SESSION["acao"] ." doesn't exists";
        }
    }
    
    function jogosRodada(){
        
    echo $_SESSION["liga"];
      $jogoDao = new JogoDAO();
      $clubeDao = new ClubeDAO();
      $array = array();
      
      foreach ($jogoDao->getJogo_Rodada($_SESSION["liga"], $_SESSION["rodada"]) as $jogo){
          
        $home = $clubeDao->getClubeByID($jogo->getAttribute("home"));  
        $away = $clubeDao->getClubeByID($jogo->getAttribute("away"));  
          
        $jogo->setAttribute($home,"home");
        $jogo->setAttribute($away,"away");
     
        array_push($array, $jogo);
        
          }
          
          $_SESSION["jogos_da_rodada"] = $array;
          $redirect ="../jogos_banco_dados/jogos_rodada.php";
          header("Location:$redirect");    
    }
    
    
}

JogoAction::invoke_method();