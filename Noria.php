<?php
    require_once("Persona.php");
    require_once("Vigues.php");
    require_once("Extranjero.php");


    class Noria 
    {
        const SIZE_NORIA = 4;
        public $genteEnNoria = 0;
        public $menores;
        public $precioTotal = 0;
        public $personas = array();

        public $contador = 0; 

        //FUNCIONES==================================================================

        public function inicioViaje($persona){ //listo

            $dni = true;
            $dniRepe = false;
            
            if ( $this->genteEnNoria <= Noria::SIZE_NORIA) { //https://www.php.net/manual/es/language.oop5.constants.php
                $this->genteEnNoria++;
                if($persona->getEdad()<18){
                    $this->menores = $this->menores + 1;
                    array_push($this->personas,$persona);
                    $this->contador++;
                    echo "Sube a la noria ".$persona->getNombre();
                    echo " Que es menor de edad";
                }else{
                    if(strlen($persona->getDni()) != 9){
                        echo "¡TERRORISTA! la poli detiene a: ".$persona->getNombre();
                    }else{ // si tiene longitud adecuada, hacemos el resto de operaciones
                        
                        for ($i=0; $i < count($this->personas); $i++) { 
                            if($persona->getDni() == $this->personas[$i]->getDni()){
                                echo "Dni Igual a otro ";
                                $dniRepe = true;
                            }
                        }
                        if($dniRepe){
                            echo "¡TERRORISTA! la poli detiene a: ".$persona->getNombre();
                        }else{
                            array_push($this->personas,$persona);
                            $this->contador++;
                            echo "Sube a la noria legalmente ".$persona->getNombre();
                        }  
                    }
                }
            }else{
                echo "la noria llena está llena<br>========================================";
            }
            
            
        }
        
        public function beneficioViaje(){ //listo
            for ($i=0; $i < count($this->personas); $i++) { 
                if (get_class($this->personas[$i]) == "Vigues") {//vigues
                    //con pass o sin pass(menores o mayores)
                    if($this->personas[$i]->getPassVigo()==false){
                        if($this->personas[$i]->getEdad()<18 && $this->personas[$i]->getEdad() > 3){
                            $this->precioTotal = $this->precioTotal +2;
                        }else{
                            if($this->personas[$i]->getEdad()>65){
                                $this->precioTotal = $this->precioTotal + 2;
                            }else{
                                $this->precioTotal = $this->precioTotal + 4;
                            }
                        }
                    }//si passvigo todo gratis
                    
                }else{//extranjeros
                    //menoes o mayores
                    if($this->personas[$i]->getEdad()<18 && $this->personas[$i]->getEdad() > 3){
                        $this->precioTotal = $this->precioTotal +5;
                    }else{
                        if($this->personas[$i]->getEdad()>65){
                            $this->precioTotal = $this->precioTotal + 7;
                        }else{
                            $this->precioTotal = $this->precioTotal + 5;
                        }
                        
                    }
                }
            }
            echo "El precio total del viaje es de: ".$this->precioTotal;
        }

        public function listarPasajeros(){ //listo
            for ($i=0; $i < count($this->personas); $i++) { 
                echo "Nombre: ".$this->personas[$i]->getNombre()."<br>"; 
            }
        }

        public function listarVigueses(){//listo
            for ($i=0; $i < count($this->personas); $i++) { 
                if (get_class($this->personas[$i])=="Vigues") {
                    echo "Nombre: ".$this->personas[$i]->getNombre()."<br>"; 
                }
            }
        }

        public function listarMenores(){//listo
            for ($i=0; $i < count($this->personas); $i++) { 
                if($this->personas[$i]->getEdad()<18){
                echo "Nombre: ".$this->personas[$i]->getNombre()."<br>"; 
                }
            }
        }

        public function finViaje($persona){ //listo
            for ($i=count($this->personas)-1; $i >= 0; $i--) { 
                if($persona->getDni() == $this->personas[$i]->getDni()){
                    unset($this->personas[$i]);
                    $this->personas = array_values($this->personas);
                    echo "Baja de la noria, la noria tiene a ".count($this->personas)."personas" ;
                    $this->genteEnNoria--;
                } 
            }
        }
        public function mostrarGenteTotal(){   
            echo "<br>El numero de personas que subió a la noria es de :" . $this->contador . " personas";
        }

    }
