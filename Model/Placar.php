<?php

class Placar {
 
    private $id_placar;
    private $home;
    private $away;
    private $jogo;
    
    public function __construct() {}
    
    function getAttribute($attributeName)
    {
       return $this->$attributeName;
    }
    
    function setAttribute($value, $attributeName)
    {
        $this->$attributeName = $value;
    }
    
}
