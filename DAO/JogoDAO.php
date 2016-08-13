<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Rodada.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Jogo.php';
class JogoDAO {
    
    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }
    
    function getJogo_Rodada($liga,$rodada){
        $jogos = array();
        $sql="SELECT * FROM JOGO INNER JOIN RODADA R ON JOGO.RODADA = R.ID_RODADA WHERE R.INICIO= ? AND JOGO.LIGA=?;";
        $pst=$this->con->prepare($sql);
        $date = date("Y/m/d", strtotime($rodada));
        $pst->bind_param("ss",$date,$liga);
        $pst->execute();
        
        $result = $pst->get_Result();
        
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
                
                $rodada = new Rodada();
                $rodada->setAttribute($row["id_rodada"], "id_rodada");
                $rodada->setAttribute(date("d/m/Y",  strtotime($row["inicio"])), "inicio");
                $rodada->setAttribute(date("d/m/Y",  strtotime($row["fim"])), "fim");
              
                
                $jogo = new Jogo();
                $jogo->setAttribute($row["horario"],"horario");
                $jogo->setAttribute($row["id_jogo"], "id_jogo");
                $jogo->setAttribute($row["home"], "home");
                $jogo->setAttribute($row["away"], "away");
                $jogo->setAttribute($row["data_jogo"], "data_jogo");    
                $jogo->setAttribute($rodada, "rodada");    
                $jogo->setAttribute($row["local_jogo"], "local_jogo");    
                $jogo->setAttribute($row["liga"], "liga");
                
                array_push($jogos, $jogo);
            }
        }
        
        return $jogos;
    }
}
