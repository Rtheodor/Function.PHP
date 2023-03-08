<?php
session_start();
include_once "conexao_a.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RT-Listar</title>
    <link rel="shortcut icon" href="images/..." />

</head>

<body>
    <a href="cadastrar.php">Cadastrar</a><br>
    <a href="listar.php">Listar</a><br>
    <h2>Listar Usuarios</h2>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }



    $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuario);
        echo "ID: $id<br>";
        echo "Nome: $nome<br>";
        echo "E-mail: $email<br>";

        //obtive a menssagem apontando Status Code: 302 Found()
        /*
        1 - Como corrigir o erro HTTP 302 (5 Métodos)
        2 - Determine se os redirecionamentos são válidos. ...
        3 - Verifique seus plugins. ...
        4 - Certifique-se de que suas configurações de URL do WordPress estejam configuradas corretamente. ...
        */
        //echo "<a href='delete.php'?id_usuario=$id'>Deletar</a>";
        //Correção feita.
        echo "<a href='editar.php?id_usuario=$id'>Editar</a><br>";
        echo "<a href='delete.php?id_usuario=$id'>Deletar</a><br>";
        echo "<hr>";
    }
    ?>

</body>

</html>