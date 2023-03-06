<?php

    include __DIR__.'\conector.php';

    $email = "thekingof@gmail.com";

    // $nome = $_GET['nome'];  
    // $senha = $_GET['senha'];
    // $email = $_GET['email'];
    // $data_nascimento = $_GET['data_nascimento'];

    $emails = mysqli_query($conexao, "SELECT email FROM cadastro WHERE email = $email ");

    if ($emails->num_rows == 1) {
        echo "Email já existente.";
    }
    elseif ($emails->num_rows == 0){
        echo "Email cadastrado com sucesso.";
    }

    // mysqli_query($conexao, "INSERT INTO cadastro(nome,senha,email,data_nascimento)
    // VALUES ('$nome','$senha','$email','$data_nascimento')");
