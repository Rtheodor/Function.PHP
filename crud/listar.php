<?php
include_once "conexao_a.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listar</title>
    <link rel="shortcut icon" href="images/..." />
</head>

<body>

    <a href="cadastrar.php">Cadastrar</a><br>
    <h2>Listar Usuarios</h2>

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    ?>

    <form method="POST" action="">
       

        <label>Pesquisar</label>
        <input type="text" name="texto_pesquisar" placeholder="Pesquisar pelo termo?">
        <br><br>

        <input type="submit" value="Pesquisar" name="PesqUsuario" /><br><br><br>

        <?php
        if (!empty($dados['PesqUsuario'])) {
            //var_dump($dados);

            $nome = "%" . $dados['texto_pesquisar'] . "%";
            $list_usuario = "SELECT id,nome,email FROM usuarios WHERE nome LIKE :nome ORDER BY id DESC";
            $retorno_usuarios = $conn->prepare($list_usuario);
            $retorno_usuarios->bindParam(':nome', $nome, PDO::PARAM_STR);
            $retorno_usuarios->execute();

            while ($row_usuario = $retorno_usuarios->fetch(PDO::FETCH_ASSOC)) {
                extract($row_usuario);
                echo "ID: $id <br>";
                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "<hr>";
                //header("Location:index.php");
            }
        }
        ?>


    </form>





</body>

</html>