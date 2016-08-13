<?php 
require_once 'C:/xampp/htdocs/LigaArua/DAO/TabelaDAO.php';

$dao = new TabelaDAO();

function player_name($dao){
     $i=1;
    foreach($dao->best_supermaster_scorer_home() as $es) {
       
        $name = $es->getAttribute("jogador")->getAttribute("infojogador")->getAttribute("nome");
        $pic =   $es->getAttribute("jogador")->getAttribute("infojogador")->getAttribute("picture");
        $team_pic = $es->getAttribute("jogador")->getAttribute("clube")->getAttribute("team_picture");
        $gol = $es->getAttribute("gol");
        
     echo   $html = <<<HTML
           <tr>
             <td> $i.º </td>
            <td style=""> $name </td>
             <td> <img src=$pic style="width:21%;" /> </td>
             <td> <img src=$team_pic />  </td> 
             <td> $gol </td>
              </tr>
            
HTML;
      $i=$i+1;
    }
    
}

?>

<html>
    <head>
 
    <title>Cartola Aruã</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <style>
      body{
                        background-color: white;
                      }
    </style>
    
    </head>
    
    <body>
    <div class="section" style="background-color:#F18628;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills"></ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
           
            <ul class="nav nav-pills" style="width: 90%; background-color: #F18628;">
              <li class="active">
                <a href="#" style="color:white;">Home</a>
              </li>
              <li>
                <a href="#" style="color:white;">Profile</a>
              </li>
              <li>
                <a href="#" style="color:white;">Messages</a>
              </li>
              <li>
                <a href="#" style="color:white;">Messages</a>
              </li>
              <li>
                <a href="#" style="color:white;">Messages</a>
              </li>
              <li>
                <a href="#" style="color:white;">Messages</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="font-family:Adobe Heiti Std R; font-weight:bold; font-size:20px;">Confira as estatísticas agora!</p>
            <hr style="border:10px,solid;border-color:black;">
          </div>
        </div>
      </div>
    </div>
  
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Ranking</th>
                  <th>Nome</th>
                  <th>Foto</th>
                  <th>Clube</th>
                  <th>Gols </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <?php
                  player_name($dao);
                  ?>
                </tr>
              
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  

</body></html>