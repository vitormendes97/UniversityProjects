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
             <td> <img src=$pic style="width:65%;" /> </td>
             <td> <img src=$team_pic style="margin-top:13%; style="width:65%;" />  </td> 
             <td> <p>$gol </p> </td>
              </tr>
            
HTML;
      $i=$i+1;
    }
    
}

?>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
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
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
            <li>
              <a href="#">Jogos</a>
            </li>
            <li>
              <a href="#">Tabela</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="section" style="padding:0px;">
      <div class="container">
        <p style="font-size:20px;font-family:Century Gothic;">Confira os Jogos da rodada, os melhores jogadores e muito mais!</p>
        <hr
        style="border:10px,solid;border-color:black;">
          <h1></h1>
      </div>
    </div>
    <div class="section" style="padding:0px;">
      <div class="container">
        <p style="font-size:16px;font-family:century gothic; font-weight:bold;">Top Goleadores Super Master :</p>
      </div>
      <br>
      <br>
    </div>
    <div class="section" style="padding:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Ranking</th>
                  <th>Jogador</th>
                  <th>Imagem</th>
                  <th>Clube</th>
                  <th>Gols</th>
                </tr>
              </thead>
              <tbody>
               <?php
               player_name($dao);
               ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="section" style="padding:0px;">
      <div class="container">
        <hr style="border:10px,solid;border-color:black;">
      </div>
    </div>
    <div class="section" style="padding:0px;">
      <div class="container">
        <p style="font-size:16px;font-family:century gothic; font-weight:bold;">Top Goleadores Master :</p>
      </div>
    </div>
    <br>
    <br>
    <div class="section" style="padding:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>