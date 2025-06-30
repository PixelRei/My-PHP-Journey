<?php
/**Creare una classe "Animale" con il metodo "verso()" che restituisce il verso dell'animale. 
 * Creare una classe "Cane" che eredita dalla classe "Animale" e ridefinisce il metodo "verso()" 
 * restituendo il verso del cane. */
    class Animali{
        public function verso(){
            return "Verso generico";
        }
    }
    class Cane extends Animali{
        public function verso(){
            return "Bau Bau";
        }
    }
?>