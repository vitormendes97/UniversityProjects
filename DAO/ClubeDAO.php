<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Clube.php';
class ClubeDAO {
    
    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }
    
    function getClubeByID($id_clube){
        
        $clube = new Clube();
        $sql = "SELECT * FROM CLUBE WHERE ID_CLUBE=?";
        $pst = $this->con->prepare($sql);
        $pst->bind_param("s",$id_clube);
        $pst->execute();
        
        $result= $pst->get_Result();
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                
                $clube->setAttribute($row["id_clube"], "id_clube");
                $clube->setAttribute($row["liga"], "liga");
                $clube->setAttribute($row["nome_clube"], "nome_clube");
                $clube->setAttribute($row["team_picture"], "team_picture");
                
            }
        }
         return $clube;
    }
    
    
}
