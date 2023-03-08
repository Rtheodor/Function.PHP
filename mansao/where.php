<?php
//include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Where BD</title>
    <link rel="shortcut icon" href="images/..." />
</head>
<body>
    <h2>Pesquisar Usuário pelo ID</h2>    
    <?php 
        $query_usuario = "SELECT id,nome, email
        FROM usuarios
        WHERE id =5
        LIMIT 1";

        $result_usuario = $conn ->prepare($query_usuario);
        $result_usuario->execute();

        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        var_dump($row_usuario);
        extract($row_usuario);

        echo "ID: $id<br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email<br>";
        echo"<hr>";

        echo "<h2>Pesquisar usuário pelo email</h2>";

        $query_usuario_b = "SELECT id,nome, email
        FROM usuarios
        WHERE email ='kettypryde@xmen.com'
        LIMIT 1";

        $result_usuario = $conn ->prepare($query_usuario);
        $result_usuario->execute();

        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        var_dump($row_usuario);
        extract($row_usuario);

        echo "ID: $id<br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email<br>";
        echo"<hr><hr>";



        echo "<h2>Pesquisar o usuário Ativo</h2>";

        $query_usuarios_c = "SELECT id,nome, email, sits_usuario_id
        FROM usuarios
        WHERE sits_usuario_id =1
        LIMIT 10";

        $result_usuarios_c = $conn ->prepare($query_usuarios_c);
        $result_usuarios_c->execute();

        while($row_usuario_c = $result_usuarios_c->fetch(PDO::FETCH_ASSOC)){
            //var_dump($row_usuario_c);
            extract($row_usuario_c);

            
        echo "ID: $id<br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email<br>";
        echo "Situação do usuário: $sits_usuario_id<br>";

        echo"<hr>";
        };


        echo "<h2>Pesquisar os Usuários com nivel de acesso Administrador</h2>";

        $query_usuarios_x = "SELECT id,nome, email, sits_usuario_id,niveis_acesso_id
        FROM usuarios
        WHERE niveis_acesso_id =2
        LIMIT 10";

        $result_usuarios_x = $conn ->prepare($query_usuarios_x);
        $result_usuarios_x->execute();

        while($row_usuario_x = $result_usuarios_x->fetch(PDO::FETCH_ASSOC)){
            //var_dump($row_usuario_x);
            extract($row_usuario_x);

            
        echo "ID: $id<br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email<br>";
        echo "Situação do usuário: $sits_usuario_id<br>";
        echo "Nivel de acesso: $niveis_acesso_id<br>";
        

        echo"<hr>";
        };


        ?>
</body>
</html>