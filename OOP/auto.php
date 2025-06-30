<?php
    /*Scrivere una classe PHP chiamata "Auto" che ha due proprietà: "marca" e "colore".
    Aggiungere un metodo per ottenere i dettagli dell'auto. */
    class Auto{
        private $marca;
        private $colore;
        public function __construct($marca, $colore){
            $this->marca = $marca;
            $this->colore = $colore;
        }
        public function getColore(){
            return $this->colore;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getDetails(){
            return "La marca dell'auto " . $this->getColore() . " è " . $this->getMarca();
        }
    }
    $macchina = new Auto("Mazda", "Nera");
    echo $macchina->getDetails();
?>