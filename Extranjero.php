<?php

require_once("Persona.php");
class Extranjero extends Persona 
{
        public function __construct($edad,$nombre,$dni){
            parent::__construct($edad,$nombre,$dni);
        }
    } 
?>