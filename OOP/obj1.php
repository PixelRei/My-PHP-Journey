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
    $persona1 = new Person("Giampaolino");
    echo "primo cliente: " . $persona1->getName()."<br> <br>"; //-> viene usato per accedere alle proprietà e metodi di un oggetto
?>
    <?php
    class Utente extends Person{
        protected $username;
        public function __construct($name, $username){
            parent::__construct($name);
            $this->username = $username;
        }
        public function getUsername(){
            return $this->username;
        }
    }
    $user1 = new Utente("Aldo", "ALd079");
    echo "username di ".$user1->getName()." è:".$user1->getUsername();
?>