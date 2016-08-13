<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Folga.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Clube.php';
class FolgaDAO {
    
    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }
    
    function getFolga($rodada,$liga){
        $folga = new Folga();
        $sql= "SELECT * FROM FOLGA F INNER JOIN CLUBE C ON F.clube = C.id_clube WHERE F.rodada=? AND F.liga=? ;";
    
        $pst = $this->con->prepare($sql);
        $pst->bind_param("ss",$rodada,$liga);
        $pst->execute();
        
        $result = $pst->get_Result();
        
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
                $clube = new Clube();
                $clube->setAttribute($row["id_clube"], "id_clube");
                $clube->setAttribute($row["nome_clube"], "nome_clube");
                $clube->setAttribute($row["team_picture"], "team_picture");
                
                $folga->setAttribute($clube, "clube");
                
            }
            
        }
        
        return $folga;
    }
    
    
    
}
