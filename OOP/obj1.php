<?php
    class Person{  //classe
        private $name; //proprietà, public/protected/private
        //const $costante = "valore";   
        public function __construct($name){ //costruttore
            $this->name = $name; //inizializzazione
        }
        
        public function getName(){
            return $this->name;
        }
    }
    $persona1 = new Person("Aldo");
    echo "primo cliente: " . $persona1->getName(); //-> viene usato per accedere alle proprietà e metodi di un oggetto


?>
