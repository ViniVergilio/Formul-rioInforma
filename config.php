<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario_teste';

hostname:     $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }
    else
    {
        echo "Conexão realizada com sucesso";
    }
?>