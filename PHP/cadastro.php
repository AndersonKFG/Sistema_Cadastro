<?php

    include __DIR__.'\conector.php';

    $nome = $_GET['nome'];  
    $senha = $_GET['senha'];
    $email = $_GET['email'];
    $data_nascimento = $_GET['data_nascimento'];

    mysqli_query($conexao, "INSERT INTO cadastro(nome,senha,email,data_nascimento)
    VALUES ('$nome','$senha','$email','$data_nascimento')");
