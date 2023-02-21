<?php

    /*
    $dbhost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "apashe";
    $port = "3306";
    */
    
    $dbhost = "127.0.0.1";
    $dbUsername = "Aluno";
    $dbPassword = "aluno";
    $dbName = "apashe";
    $port = "3306";
    
    
    $conexao = mysqli_connect($dbhost, $dbUsername, $dbPassword, $dbName, $port);

?>