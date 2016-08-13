<?php

include_once 'C:/xampp/htdocs/LigaArua/Model/Liga.php';
include_once 'C:/xampp/htdocs/LigaArua/Model/Clube.php';
include_once 'C:/xampp/htdocs/LigaArua/Model/Tabela.php';
include_once 'C:/xampp/htdocs/LigaArua/Model/InfoJogador.php';
include_once 'C:/xampp/htdocs/LigaArua/Model/Jogador.php';
include_once 'C:/xampp/htdocs/LigaArua/Model/Estatistica_Jogador.php';
include_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';

class EstatisticaDAO {

    private $con;

    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }

    function home_tabela_SuperMaster() {
        $tabelas = array();
        $sql = "SELECT * FROM TABELA T INNER JOIN CLUBE C ON T.clube = C.id_clube INNER JOIN  LIGA L on
L.id_liga = T.liga  WHERE  T.liga =2 ORDER BY T.pontos ASC LIMIT 5 ;";

        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $liga = new Liga();
                $liga->setAttribute($row["id_liga"], "id_liga");
                $liga->setAttribute($row["nome_liga"], "nome_liga");

                $clube = new Clube();
                $clube->setAttribute($row["id_clube"], "id_clube");
                $clube->setAttribute($liga, "liga");
                $clube->setAttribute($row["nome_clube"], "nome_clube");
                $clube->setAttribute($row["team_picture"], "team_picture");

                $tabela = new Tabela();
                $tabela->setAttribute($row["id_tabela"], "id_tabela");
                $tabela->setAttribute($liga, "liga");
                $tabela->setAttribute($clube, "clube");
                $tabela->setAttribute($row["pontos"], "pontos");

                array_push($tabelas, $tabela);
            }
        }
        return $tabelas;
    }

    function best_scorer_home() {
        $dao = new EstatisticaDAO();
    

        $sql = "select * from jogador j inner join infojogador i on j.infojogador = i.id_info
inner join clube c on c.id_clube = j.clube where j.id_player = ?;";
    $jogadores = array();
        foreach ($dao->getTotalPlayers_In_Estatistica() as $total) {

            $pst = $this->con->prepare($sql);
            $pst->bind_param("s", $total);
            $pst->execute();

            $result = $pst->get_Result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $clube = new Clube();
                    $clube->setAttribute($row["id_clube"], "id_clube");
                    $clube->setAttribute($row["liga"], "liga");
                    $clube->setAttribute($row["nome_clube"], "nome_clube");
                    $clube->setAttribute($row["team_picture"], "team_picture");

                    $info = new InfoJogador();
                    $info->setAttribute($row["id_info"], "id_info");
                    $info->setAttribute($row["nome"], "nome");
                    $info->setAttribute($row["idade"], "idade");
                    $info->setAttribute($row["posicao"], "posicao");
                    $info->setAttribute($row["picture"], "picture");

                    $player = new Jogador();
                    $player->setAttribute($row["id_player"], "id_player");
                    $player->setAttribute($clube, "clube");
                    $player->setAttribute($info, "infojogador");

                    array_push($jogadores, $player);
                }
            }
        }
        return $jogadores;
    }

    public function fixTotalGols($id_player) {
        $gols_totais = null;
        $sql = "select SUM(GOL) as gols_totais from estatistica_jogador es inner join jogador j on j.id_player = es.jogador
where jogador = ?;";

        $pst = $this->con->prepare($sql);
        $pst->bind_param("s", $id_player);
        $pst->execute();

        $result = $pst->get_Result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $gols_totais = $row["gols_totais"];
            }
        }
        return $gols_totais;
    }

    function best_master_scorer_home() {
        
    }

    function getTotalPlayers_In_Estatistica() {

        $num = array();
        $sql = "select distinct(jogador) from estatistica_jogador;";

        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($num, $row["jogador"]);
            }
        }
        return $num;
    }

    
    function artilheiro_master(){
        
        $sql = "select * FROM JOGADOR J INNER JOIN infojogador I ON J.infojogador = I.id_info INNER JOIN CLUBE C ON
C.id_clube = J.clube INNER JOIN estatistica_jogador es ON es.jogador = J.id_player 
   WHERE C.liga = 1  ORDER BY GOL DESC LIMIT 1 ;";
        
    }
    
    
    
    
    
    
    
}
