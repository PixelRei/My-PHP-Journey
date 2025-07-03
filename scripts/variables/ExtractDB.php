<?php
    //connecting the file php to mysql database
    try {
        $hostname = 'localhost';
        $dbname = 'cicciogamer';
        $user = 'root';
        $pass = '';
        $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass, array(
        PDO::ATTR_PERSISTENT => true));
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
        die();
    }
    //we won't write nothing, instead we want to select elements from the database
    $sql = 'SELECT username, password FROM user';  //definition of the query SQL
    $stmt = $db->prepare($sql);
    $stmt->execute();   
?>