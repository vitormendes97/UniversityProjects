<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Clube.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Tabela.php';

class TabelaDAO {
    
    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }
    
    
    public function getTabela(){
        $tabelas = array();
        $sql = "select * from tabela inner join clube c on tabela.clube= c.id_clube order by pontos DESC;";
        
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
             
            while ($row = $result->fetch_assoc()){
                
                $clube = new Clube();
                $clube->setAttribute($row["id_clube"], "id_clube");
                $clube->setAttribute($row["liga"], "liga");
                $clube->setAttribute($row["nome_clube"],"nome_clube");
                $clube->setAttribute($row["team_picture"],"team_picture");
                
                $tabela = new Tabela();
                $tabela->setAttribute($row["id_tabela"], "id_tabela");
                $tabela->setAttribute($row["liga"], "liga");
                $tabela->setAttribute($row["pontos"], "pontos");
                $tabela->setAttribute($row["vitoria"], "vitoria");
                $tabela->setAttribute($row["empate"], "empate");
                $tabela->setAttribute($row["derrota"], "derrota");
                $tabela->setAttribute($row["gol_pro"], "gol_pro");
                $tabela->setAttribute($row["gol_contra"], "gol_contra");
                $tabela->setAttribute($row["saldo_gol"], "saldo_gol");
                $tabela->setAttribute($clube,"clube");
                
                array_push($tabelas, $tabela);
            }
        }
        return $tabelas;
    }
}
