
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pet-code</title>
</head>
<body>
    <form action='' method='POST'>
        <h1>faça login</h1>
        <p>
        <label for="">email</label>
        <input type="email" name='email'>
        </p>
        <p>
            <label for="">senha</label>
            <input type="password" name='senha'>
        </p>
        <p>
            <button type='submit'>entrar</button>
        </p>


    </form>
    
</body>
</html>

<?php
    include('conexao.php')

    if (isset($_POST['email'])) || (isset($_POST['senha'])) {
        //strlen é a quantia de caracteres
        if (strlen($_POST['email']) == 0) {
            echo "preenncha seu email";
        } else if (strlen($_POST['senha'] ==0)) {
            echo "digite uma senha";
        } else {
            //funçao realscape tring, ela limpa a string que ta dentro do email (mais pro caso de proteçao ao banco de daods, evita o sql injection)
            $email = mysqli->real_scape_string($_POST['email']);
            $senha = mysqli->real_scape_string($_POST['email']);


            //consulta ao sql
            $sql_code = "SELECT * FROM usuarios WHERE  'email'='$email' AND 'senha' = '$senha' ";
            $dql_query = $mysqli->query($sql_code) or die("falha na execuçao do codigo sql".mysqli->error);

            $quantidade = $sql_query->num_rows

            if ($quantidade == 1) {

                $usuario = $sql_query -> fetch_assoc();
                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                //session é uma variavel que continua valida mesmo quando a pessoa troca de pagina, get so continua valida na url, post continua valida quando é enviada por um formulario, eessa fica armazenada por uma quantia de tempo
                header("Location: comunidade.php")

            }else {
                echo "falha ao logar";
            }
        }

    }
?>
