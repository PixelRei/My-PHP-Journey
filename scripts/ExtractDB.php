<?php
    //connecting the file php to mysql database
    try {
        $hostname = '127.0.0.1';
        $dbname = 'mydatabse';
        $user = 'root';
        $pass = '';
        $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass, array(
        PDO::ATTR_PERSISTENT => true));
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
        die();
    }
    //we won't write nothing, instead we want to select elements from the database
    $sql = 'SELECT username, password FROM utenti';  //definition of the query SQL
    $stmt = $db->prepare($sql);
    $stmt->execute();   
    //as we want to print all the elements that we have selected, we must use fetch command
    //we could also use fetchAll(), which is faster but the consumption of memory is higher, and we'll receive a JSON output file
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'Username: '.$row['username'].',  password: '.$row['password'];
    }
?>