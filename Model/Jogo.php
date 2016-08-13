<?php


class Jogo {

private $id_jogo;
private $home;
private $away;
private $data_jogo;
private $rodada;
private $local_jogo;
private $liga;
private $horario;

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
