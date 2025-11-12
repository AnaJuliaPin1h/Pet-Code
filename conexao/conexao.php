<?php
    $usuario = 'root';
    $senha = '';
    $database = 'login';
    $host = 'localhost';

    $myslqi = new mysql($usuario, $senha, $host, $database);

    if ($mysqli->error) {
        die("falha ao conectar ao banco de dados".mysqli->error);
    }
?>