<?php
    class Persona
    {
        private $edad;
        private $nombre;
        private $dni;

        //CONSTRUCTOR================================================================

        public function __construct($edad,$nombre,$dni){
            $this->edad = $edad;
            $this->nombre = $nombre;
            $this->dni = $dni;
        }

        //SETTERS GETTERS============================================================

        public function getNombre()
        {
                return $this->nombre;
        }

 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }
 
        public function getDni()
        {
                return $this->dni;
        }
 
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }

        public function getEdad()
        {
                return $this->edad;
        }

        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }
    }
    
?>