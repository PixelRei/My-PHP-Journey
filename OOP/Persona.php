<?php
    /**Creare una classe "Persona" con le proprietà "nome" e "cognome" e il metodo "presentati()" 
     * che restituisce una stringa di presentazione della persona. 
     * Creare una classe "Studente" che eredita dalla classe "Persona" e ha una proprietà aggiuntiva "matricola". 
     * Ridefinire il metodo "presentati()" per visualizzare anche la matricola dello studente. */
    class Persona{
        protected $nome;
        protected $cognome;

        public function __construct($nome, $cognome){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
        public function presentati(){
            return "Questa persona si chiama " . $this->nome . " " . $this->cognome;
        }
    }
    class Studente extends Persona{
        protected $marticola;
        public function __construct($nome, $cognome, $matricola){
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }
        //override di presentati
        public function presentati(){
            return "Questo studente si chiama ". $this->nome . " ". $this->cognome . " e la sua matricola è " . $this->matricola;
        }
    }
    $persona1 = new Persona("Roberto", "Rossi");
    echo $persona1->presentati() ."<br>";
    $studente = new Studente("Mario", "Bianchi","123456");
    echo $studente->presentati();
?>