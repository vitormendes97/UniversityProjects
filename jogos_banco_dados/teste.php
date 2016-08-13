<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'C:/xampp/htdocs/LigaArua/DAO/JogoDAO.php';  
        session_start();
        $dao = new JogoDAO();
        foreach ($_SESSION["jogos_da_rodada"] as $jogo){
            echo $jogo->getAttribute("home");
        }
       
        
        ?>
    </body>
</html>
