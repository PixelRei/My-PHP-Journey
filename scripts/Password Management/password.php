<?php
    $userpassword = "L@MiaPass0rd"; //password inserita dall'utente
    $criptedPassword = password_hash($userpassword, PASSWORD_DEFAULT); //password criptata da noi, salvata in un database
    if(password_verify($userpassword, $criptedPassword)){
        echo "Password inserita correttamente";
    }else{
        echo "Password non corretta";
    }
?>