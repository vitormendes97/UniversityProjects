<?php

class Rodada {

    private $id_rodada;
    private $inicio;
    private $fim;
    
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
