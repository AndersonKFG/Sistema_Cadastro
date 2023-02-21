<?php

    include __DIR__.'\conector.php';

    $email = $_POST['email_login'];
    $senha = $_POST['senha_verificador'];

    $verificador = mysqli_query($conexao, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'");

    if ($verificador->num_rows == 1) {
        echo "Login efetuado com sucesso.";
    }
    elseif ($verificador->num_rows == 0){
        echo "Acesso recusado. Email ou senha errados.";
    }

?>