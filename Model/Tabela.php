<?php


class Tabela {
    
    private $id_tabela;
    private $liga;
    private $clube;
    private $pontos;
    private $vitoria;
    private $empate;
    private $derrota;
    private $gol_pro;
    private $gol_contra;
    private $saldo_gol;
    
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
