<?php


class Clube {

    private $id_clube;
    private $liga;
    private $nome_clube;
    private $team_picture;
    
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
