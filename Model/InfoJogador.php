<?php


class InfoJogador {
    
    private $id_info;
    private $nome;
    private $idade;
    private $posicao;
    private $picture;
    
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
