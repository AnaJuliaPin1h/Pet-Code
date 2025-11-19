
<?php
     header('Content-Type: text/html; charset=utf-8');


    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        die ("voce nao pode acessar essa pagina, faça login antes de poder acessar a comunidade");
    }

?>