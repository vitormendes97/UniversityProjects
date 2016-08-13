<?php
require_once 'C:/xampp/htdocs/LigaArua/Connection/Connection.php';
require_once 'C:/xampp/htdocs/LigaArua/Model/Placar.php';
class PlacarDAO {
    
    private $con;
    
    public function __construct() {
        $this->con = Connection::getInstance()->getConnection();
    }
    
    
    function getPlacarJogo($jogo){
      $placar = new Placar();  
      $sql = "SELECT * FROM PLACAR WHERE JOGO = ? ;";  
      
      $pst = $this->con->prepare($sql);
      $pst->bind_param("s",$jogo);
      $pst->execute();
      
      $result = $pst->get_Result();
      
      if($result->num_rows > 0){
          while($row= $result->fetch_assoc()){
             
              $placar->setAttribute($row["id_placar"], "id_placar");
              $placar->setAttribute($row["home"], "home");
              $placar->setAttribute($row["away"], "away");
              $placar->setAttribute($row["jogo"], "jogo");
             
          }
      }
       return $placar;
    }
    
   
    
}
