<?php
require_once("Persona.php");
    class Vigues extends Persona 
    {
        
        private $passVigo;

        public function __construct($edad, $nombre, $dni, $passVigo){
            parent::__construct($edad,$nombre,$dni);
            $this->passVigo =$passVigo;
        }

         
        public function getPassVigo()
        {
                return $this->passVigo;
        }

       
        public function setPassVigo($passVigo)
        {
                $this->passVigo = $passVigo;

                return $this;
        }
    }
    
?>