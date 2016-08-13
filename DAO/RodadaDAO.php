<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
class RodadaDAO {

    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }
    
    function numero_de_rodadas(){
        $numero_rodadas = array();
        $sql = "SELECT inicio from rodada";
        
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
               $rodada = $row["inicio"];
          
               
                
                array_push($numero_rodadas, date("d/m/Y",  strtotime($rodada)));
            }
        }
        return $numero_rodadas;
    }
    
}
