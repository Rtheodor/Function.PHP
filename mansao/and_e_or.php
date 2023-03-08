    <?php
    include_once "conexao.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Operadores AND & OR</title>
        <link rel="shortcut icon" href="images/..." />
    </head>
    <body>
        <h2>Listar usuário com duas condições usando o AND</h2>
        <?php
        
            $query_usuarios= "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id 
                FROM usuarios
                WHERE sits_usuario_id = 1
                AND niveis_acesso_id = 3";

            $result_usuarios = $conn->prepare($query_usuarios);
            $result_usuarios->execute();

            while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
                //var_dump($row_usuario);
                extract($row_usuario);
                echo "ID $id <br>";
                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "ID da situação: $sits_usuario_id <br>";
                echo "ID do nivel de acesso: $niveis_acesso_id <br>";
                echo "<hr>";
            }
            
            echo"<h2>Listar usuário com duas condições usando o OR</h2>";
            $query_usuarios= "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id 
                FROM usuarios
                WHERE sits_usuario_id = 1
                OR niveis_acesso_id = 3";

            $result_usuarios_x = $conn->prepare($query_usuarios);
            $result_usuarios_x->execute();

            while($row_usuario_x = $result_usuarios_x->fetch(PDO::FETCH_ASSOC)){
                //var_dump($row_usuario);
                extract($row_usuario_x);
                echo "ID $id <br>";
                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "ID da situação: $sits_usuario_id <br>";
                echo "ID do nivel de acesso: $niveis_acesso_id <br>";
                echo "<hr>";
            }

        ?>
    </body>
    </html>