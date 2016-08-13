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
        $sql = "select * from tabela inner join clube c on tabela.clube= c.id_clube order by DESC;";
        
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
             
            while ($row = $result->fetch_assoc()){
                
                $clube = new Clube();
                $clube->setAttribute($row["id_clube"], "id_clube");
                $clube->setAttribute($row["liga"], "liga");
                $clube->setAttribute($row["nome_clube"],"nome_clube");
                $clube->setAttribute($row["team_picture"],"team_picture");
                
                
            }
        }
    }
}
