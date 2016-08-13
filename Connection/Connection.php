<?php

class Connection {
 
    private $servidor ="localhost";
    private $database = "cartola_arua";
    private $username = "root";
    private $pass = "mendes";
    private static $conexao;
    
    public function __construct() {
        
    }
    
    public static function getInstance(){
        
        if(self::$conexao == null){
            self::$conexao = new Connection();
        }
        return self::$conexao;
    }
    
    public function getConnection(){
        $con = new mysqli($this->servidor, $this->username, $this->pass, $this->database);
        return $con;
    }
    
    public function getAttribute(){
         return $this->database;
    }
    
    
    
}
