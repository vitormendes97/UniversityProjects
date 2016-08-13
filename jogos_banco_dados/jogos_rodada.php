<?php

require_once 'C:/xampp/htdocs/LigaArua/DAO/JogoDAO.php';  
require_once 'C:/xampp/htdocs/LigaArua/DAO/FolgaDAO.php';  
require_once 'C:/xampp/htdocs/LigaArua/DAO/PlacarDAO.php';  


session_start();

function getDia(){
    foreach($_SESSION["jogos_da_rodada"] as $jogos){
        
        $dia = $jogos->getAttribute("rodada")->getAttribute("inicio");
        
    }
    
    return $dia;
}

function getLocal(){
    
  foreach($_SESSION["jogos_da_rodada"] as $jogo){
     echo $local = $jogo->getAttribute("local_jogo");
     break;
  }  
    
  function getLiga(){
      $liga= null;
      foreach($_SESSION["jogos_da_rodada"] as $jogo){
          if($jogo->getAttribute("liga") == 1){
              $liga = "Master";
          }
          else{
              $liga = "Super Master";
          }
      }
      return $liga;
  }
  
  
  function getFolga(){
      
      $dao = new FolgaDAO();
      
     foreach($_SESSION["jogos_da_rodada"] as $jogos){
         
         $folga = $dao->getFolga($jogos->getAttribute("rodada")->getAttribute("id_rodada"), $jogos->getAttribute("liga"));
         
     }
    return $folga->getAttribute("clube")->getAttribute("nome_clube");   
  }
  
  

  
  function getJogos(){
      
    $placarDao = new PlacarDAO();
   
      foreach($_SESSION["jogos_da_rodada"]as $jogo){
          $placar = $placarDao->getPlacarJogo($jogo->getAttribute("id_jogo"));
          $team_home = $jogo->getAttribute("home")->getAttribute("team_picture");
          $team_away = $jogo->getAttribute("away")->getAttribute("team_picture");
          $placar_home = $placar->getAttribute("home");
          $placar_away = $placar->getAttribute("away");
          $horario = $jogo->getAttribute("horario");
          
          echo   $html = <<<HTML
           
                  
                  <div id="envolve">
<table border=0 width="100%">
<tr>
    <td align="right">
        <div id="div_1" style="margin-right: 40%;">
        
            <p style="font-size:19px;font-family:Century Gothic;color:black;">Horário : $horario</p>
        
        
    </div>
    </td>
<td align="right">
    <div id="div_1" style="margin-right: 120%;">
        
        <img src="../$team_home" alt=""/>
        
        
    </div>
    
</td>
<td width="1px" align="center">
    <div id="div_1" style="margin-bottom: -50%;margin-left: -350%;">
        <p style="color:black;font-size:19px;font-family:Century Gothic;font-weight: bold;">$placar_home X $placar_away </p>
    </div>
</td>
<td align="left">
    <div id="div_1" style="margin-left: 3%;">
        <img src="../$team_away" alt=""/>
    </div>
</td>
</tr>
</table>
    
</div>
                  
                  
                    
HTML;
          
          
      }
      
  }
    
}

?>


<html>
    
    <head>
    <title>Rodada</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/jogos_rodada.css" rel="stylesheet" type="text/css"/>
    
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <!-- (Optional) Latest compiled and minified JavaScript translation
    files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/i18n/defaults-*.min.js"></script>
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span><img src="arua-logo.jpg" alt="" class="img-thumbnail" style="width:50%;margin-top:-7%;padding:0px;"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
                <a href="../cartola.php">Home</a>
            </li>
            <li>
              <a href="#">Estatísticas</a>
            </li>
            <li>
                <a href="jogos.php">Jogos</a>
            </li>
            <li>
              <a href="#">Tabela</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section" style="margin-top:5%;padding:0px;">
      <div class="container">
          <p style="font-size:19px;font-family:Century Gothic;margin-left:3%;">Jogos da Rodada 14(Inicio <?php echo getDia()?>)</p>
        <p style="font-size:13px;font-family:Century Gothic;margin-left: 5%;">Local : <?php  getLocal() ?></p>
        <p style="font-size:13px;font-family:Century Gothic;margin-left: 5%;">Liga : <?php echo getLiga()?></p>

        <p style="font-size:13px;font-family:Century Gothic;margin-left: 5%;">Folga: <?php echo getFolga()?></p>
        <hr style="border:10px,solid;border-color:black; margin-top:0px;">
      </div>
      
    </div>
 
    <br>
    <br>
   
    <div class="section" style="padding:0px;">
      <div class="container">
        <fieldset style="border:2px solid #999; border-radius:8px;height: 43%;">
         
     <?php
     getJogos();
     ?>
     
            
        </fieldset>
      </div>
    </div>
  

</body></html>