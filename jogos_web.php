<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div class="section" style="margin-top:5%;padding:0px;">
      <div class="container">
        <p style="font-size:20px;font-family:Century Gothic;margin-bottom:0px;margin-left:2%;">Fique por Dentro dos Jogos da Rodada.</p>
        <hr style="border:10px,solid;border-color:black; margin-top:0px;">
        <br>
        <br>
        <p style="font-size:13px;font-family:Century Gothic;margin-left:73%;">Próxima rodada 14º(17/07/2016)</p>
        <p style="font-size:20px;font-family:Century Gothic;text-align:center;">Selecione a rodada e o campeonato referente.</p>
      </div>
    </div>
  
  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="margin-left: 39%;width:20%;padding:0px;margin-bottom:0px;">
            <form action="jogos_rodada.php" method="POST">
              <select class="selectpicker" data-style="btn-success">
                <option>Rodada</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                
                </select>
                
                <br>
                <br>
                <br>
                <select class="selectpicker" data-style="btn-success" >
                <option>Campeonato</option>
                <option>Master</option>
                <option>Super Master</option>
                
              </select>
                <br>
                <br>
                <br>
                <input type="submit" value="Pesquisar" class="btn btn-sm btn-success" style="margin-left: 26%;">
                
            </form>
          </div>
        </div>
      </div>
    </div>

</body></html>