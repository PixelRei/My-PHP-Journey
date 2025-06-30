<?php
    /*Creare un'interfaccia "FormaGeometrica" con un metodo "calcolaArea()". 
    Creare una classe "Quadrato" che implementa l'interfaccia e implementa il metodo "calcolaArea()" 
    per calcolare l'area del quadrato. */
    interface FormaGeometrica{
        public function calcolaArea();
    }
    class Quadrato implements FormaGeometrica{
        private $lato;
        public function __construct($lato){
            $this->lato = $lato;
        }
        public function calcolaArea(){
            return pow($this->lato, 2);  //il secondo numero è l'esponente
        }
    }
    $quadrattino = new Quadrato(5);
    echo $quadrattino->calcolaArea();
?>