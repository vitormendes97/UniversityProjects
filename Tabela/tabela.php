<?php

require_once 'C:/xampp/htdocs/LigaArua/DAO/TabelaDAO.php';


function getTabelas(){
    
$tabelaDAO = new TabelaDAO();
$position = 1;
for($i=0; $i<count($tabelaDAO->getTabela());$i++){
    
    if($tabelaDAO->getTabela()[$i]->getAttribute("pontos") == $tabelaDAO->getTabela()[$i]->getAttribute("pontos") ){
//        
//        if($tabelaDAO->getTabela()[$i]->getAttribute("saldo_gol") < $tabelaDAO->getTabela()[$i+1]->getAttribute("saldo_gol")   ){
//            
//            $teste = null;
//            $teste = $tabelaDAO->getTabela()[$i];
//            $tabelaDAO->getTabela()[$i] = $tabelaDAO->getTabela()[$i+1];
//            $tabelaDAO->getTabela()[$i+1]= $teste;
//            
//        }
        
    } 
    
    
    
    if($tabelaDAO->getTabela()[$i]->getAttribute("liga")==1){
        
        $clube = $tabelaDAO->getTabela()[$i]->getAttribute("clube")->getAttribute("nome_clube");
        $clube_img = $tabelaDAO->getTabela()[$i]->getAttribute("clube")->getAttribute("team_picture");
        
        $pontos = $tabelaDAO->getTabela()[$i]->getAttribute("pontos");
        $vitoria = $tabelaDAO->getTabela()[$i]->getAttribute("vitoria");
        $empate = $tabelaDAO->getTabela()[$i]->getAttribute("empate");
        $derrota = $tabelaDAO->getTabela()[$i]->getAttribute("derrota");
        $gp = $tabelaDAO->getTabela()[$i]->getAttribute("gol_pro");
        $gc = $tabelaDAO->getTabela()[$i]->getAttribute("gol_contra");
        $sg = $tabelaDAO->getTabela()[$i]->getAttribute("saldo_gol");
        
           echo $html = <<<HTML
            <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">$position º</p></td>
                            <td align="center"><img src="../$clube_img"style="margin-left:15%;">$clube</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">$pontos</p></td>
                            <td><p style="text-align:center">$vitoria</p></td>
                            <td><p style="text-align:center">$empate</p></td>
                            <td><p style="text-align:center">$derrota</p></td>
                            <td><p style="text-align:center">$gp</p></td>
                            <td><p style="text-align:center">$gc</p></td>
                            <td><p style="text-align:center">$sg</p></td>


                        </tr>
                
                    
HTML;
    $position++;
    }
    
  

    
    
}


   
    
    
}
?>


<!DOCTYPE HTML>
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

        <title>
            Aruã - Tabela
        </title>

    </head>

    <body>

        <div class="row">

            <div class="col-md-12">

                <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><span><img src="../arua-logo.jpg" alt="" class="img-thumbnail" style="width:50%;margin-top:-7%;padding:0px;"></span></a>
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


            </div>
        </div>

        <div class="row">
            <div class="col-md-8" style="width:80%;margin-left:290px;">
                <h3 style="margin-left: 250px;font-family:Century Gothic;margin-top: 30px;">
                    Campeonato <span class="label label-default" style="background-color: green;">Master</span></h3>


            </div>



            <div class="row">

                <div class="col-md-12" style="margin-top:30px;width:90%;margin-left: 80px;">

                    <table class="table table-striped">
                        <tr>
                            <th><p style="text-align:center">Ranking</p></th>
                            <th><p style="text-align:center">Time</p></th>
                            <th><p style="text-align:center">Liga</p></th>
                            <th><p style="text-align:center">Pontos</p></th>
                            <th><p style="text-align:center">Vitorias</p></th>
                            <th><p style="text-align:center">Empate</p></th>
                            <th><p style="text-align:center">Derrotas</p></th>
                            <th><p style="text-align:center">GP</p></th>
                            <th><p style="text-align:center">GC</p></th>
                            <th><p style="text-align:center">SG</p></th>



                        </tr><!--

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>
                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>



                        </tr>

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>



                        </tr>


                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>
                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>

                        </tr>

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Master</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>-->

                     <?php
                     getTabelas();
                     ?>

                    </table>


                </div>

                <!-- Aqui começa a tabela de uma nova liga  -->


                <div class="row">
            <div class="col-md-8" style="width:80%;margin-left:350px;">
                <h3 style="margin-left: 250px;font-family:Century Gothic;margin-top: 30px;">
                    Campeonato <span class="label label-default" style="background-color: green;">SuperMaster</span></h3>


            </div>



            <div class="row">

                <div class="col-md-12" style="margin-top:30px;width:90%;margin-left: 80px;">

                    <table class="table table-striped">
                        <tr>
                            <th><p style="text-align:center">Ranking</p></th>
                            <th><p style="text-align:center">Time</p></th>
                            <th><p style="text-align:center">Liga</p></th>
                            <th><p style="text-align:center">Pontos</p></th>
                            <th><p style="text-align:center">Vitorias</p></th>
                            <th><p style="text-align:center">Empate</p></th>
                            <th><p style="text-align:center">Derrotas</p></th>
                            <th><p style="text-align:center">GP</p></th>
                            <th><p style="text-align:center">GC</p></th>
                            <th><p style="text-align:center">SG</p></th>



                        </tr>

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">SuperMaster</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>
                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">SuperMaster</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>



                        </tr>

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">SuperMaster</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>
                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">SuperMaster</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>



                        </tr>


                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">SuperMaster</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>
                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">Super</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>

                        </tr>

                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center">1º</p></td>
                            <td align="center"><img src="../Campeonato Arua Times/arsenal60x60.png"style="margin-left:15%;"> Arsenal</td>

                            <td align="center"><p style="text-align:center">SuperMaster</p></td>
                            <td><p style="text-align:center">40</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">12</p></td>
                            <td><p style="text-align:center">3</p></td>
                            <td><p style="text-align:center">9</p></td>
                            <td><p style="text-align:center">20</p></td>
                            <td><p style="text-align:center">10</p></td>


                        </tr>
                    </table>


                </div>

             


    </body>
</html>