<?php

class Mathematik{

private $stufe;
private $lerneinheit;
private $lerninhalt = ["a", "b", "c"];



public function __construct($stufe,$lerneinheit){

    $this->stufe = $stufe;
    $this->lerneinheit = $lerneinheit;
    
}

public function lerninhalt(){
   return $this->lerninhalt;
}

}