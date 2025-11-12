<?php
    if (!iseet($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {
        die ("voce nao pode acessar essa pagina, faça login antes de poder acessar a comunidade")
    }

?>