<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
class LigaDAO {
   
    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }

    function numero_ligas(){
        
        $ligas = array();
        $sql = "SELECT NOME_LIGA as liga FROM LIGA";
        
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
                $liga = $row["liga"];
                array_push($ligas, $liga);
                
            }
            
        }
        return $ligas;
    }
     
    
    
}
