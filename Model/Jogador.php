<?php

class Jogador {
    
    private $id_player;
    private $clube;
    private $infojogador;
    
    public function __construct() {
        
    }
    
    function getAttribute($attributeName)
    {
       return $this->$attributeName;
    }
    
    function setAttribute($value, $attributeName)
    {
        $this->$attributeName = $value;
    }
    
}
