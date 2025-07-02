<?php
    $utente = 'paul';
    $password = 'p4uL';
    try{
        $hostname = 'localhost';
        $dbname = 'cicciogamer';
        $user = 'root';
        $pass = '';
        $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass, array(
        PDO::ATTR_PERSISTENT => true));
    }catch(PDOException $e){
        echo "Errore :" . $e->getMessage();
        die();
    }
    //$db->query("INSERT INTO user(username, password) VALUES('$utente', '$password')"); un modo per inserire i dati direttamente nella query che però non è abbastanza sicuro, a rischio di SQL Injection
    /**bindValue --> non puoi cambiare il valore
     * bindParam --> lo puoi fare
     */
    $sql = "INSERT INTO user(username, password) VALUES(:username, :password)"; //definizione della query SQL
    $stmt = $db->prepare($sql); //creazione di un oggetto PDOStatement
    //db è invece un oggetto PDO che rappresenta una connessione al database
    $stmt->bindValue(':username', $utente, PDO::PARAM_STR);//si associa la variabile al parametro/placeholder dela query
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    //PDO::PARAM_STR indica che ciò che passiamo è una stringa
    $stmt->execute(); //la query viene eseguita
?>