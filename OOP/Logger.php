<?php
    /*Creare un'interfaccia "Logger" con un metodo "log($messaggio)". 
    Creare una classe "FileLogger" che implementa l'interfaccia e implementa 
    il metodo "log($messaggio)" per scrivere il messaggio su un file di log. */
    interface Logger{
        public function log($messaggio);
    }
    class FileLogger implements Logger{
        public function __construct(){
        }
        public function log($messaggio){
            file_put_contents('output.txt', $messaggio);
        }
    }
    $logger = new FileLogger();
    $logger->log("no tortellini");
?>