<?php
require_once 'C:/xampp/htdocs/LigaArua/DAO/EstatisticaDAO.php';

$dao = new EstatisticaDAO();

function player_name($dao){
$i = 1;
foreach($dao->best_scorer_home() as $es) {

$name = $es->getAttribute("infojogador")->getAttribute("nome");
$pic = $es->getAttribute("infojogador")->getAttribute("picture");
$team_pic = $es->getAttribute("clube")->getAttribute("team_picture");
$gol = $dao->fixTotalGols($es->getAttribute("id_player"));

if($es->getAttribute("clube")->getAttribute("liga") == 2){

echo $html = <<<HTML
           <tr>
             <td> $i.º </td>
            <td style=""> $name </td>
             <td> <img src=$pic style="width:25%;" /> </td>
             
             <td> <img src="$team_pic" style="margin-top:13%;" />  </td> 
             <td> <p>$gol </p> </td>
              </tr>
            
HTML;
$i = $i+1;
}
    }
}



function player_name2($dao){
$i = 1;
foreach($dao->best_scorer_home() as $es) {

$name = $es->getAttribute("infojogador")->getAttribute("nome");
$pic = $es->getAttribute("infojogador")->getAttribute("picture");
$team_pic = $es->getAttribute("clube")->getAttribute("team_picture");
$gol = $dao->fixTotalGols($es->getAttribute("id_player"));

if($es->getAttribute("clube")->getAttribute("liga") == 1){

echo $html = <<<HTML
           <tr>
             <td> $i.º </td>
            <td style=""> $name </td>
             <td> <img src=$pic style="width:25%;" /> </td>
             
             <td> <img src="$team_pic" style="margin-top:13%;" />  </td> 
             <td> <p>$gol </p> </td>
              </tr>
            
HTML;
$i = $i+1;
}
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

    <body style="background-color: #E9E8E8;">
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
                            <a href="cartola.php">Home</a>
                        </li>
                        <li>
                            <a href="jogos_banco_dados/estatisticas.php">Estatísticas</a>
                        </li>
                        <li>
                            <a href="jogos_banco_dados/jogos.php">Jogos</a>
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
                                    <th>Ranking</th>
                                    <th>Jogador</th>
                                    <th>Imagem</th>
                                    <th>Clube</th>
                                    <th>Gols</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
player_name2($dao);
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>