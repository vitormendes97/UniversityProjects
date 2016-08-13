<?php


class Liga {
   
    private $id_liga;
    private $nome_liga;
    
    public function __destruct() {
        
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
