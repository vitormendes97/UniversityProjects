<?php


class Folga {

private $id_folga;
private $clube;
private $rodada;
private $liga;

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
