<?php


class Tabela {
    
    private $id_tabela;
    private $liga;
    private $clube;
    private $pontos;
    
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
    
    function toStringTabela(){
        
        return $this->pontos." ".$this->id_tabela;
    }
    
}
