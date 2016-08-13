<?php

class Estatistica_Jogador {
  
    private $id_estatistica;
    private $jogador;
    private $gol;
    private $assistencia;
    private $cartao_amarelo;
    private $cartao_vermelho;
    private $rodada;
    
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
