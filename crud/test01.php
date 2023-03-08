<?php
include_once "conexao_a.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - BETWEEN</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Listar Usuários</h2>

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    ?>

    <form method="POST" action="">

        <?php
        $data_inicio = "";
        if (isset($dados['data_inicio'])) {
            $data_inicio = $dados['data_inicio'];
        }
        ?>
        <label>Data de início</label>
        <input type="date" name="data_inicio" value="<?php echo $data_inicio; ?>"><br><br>

        <?php
        $data_final = "";
        if (isset($dados['data_final'])) {
            $data_final = $dados['data_final'];
        }
        ?>
        <label>Data final</label>
        <input type="date" name="data_final" value="<?php echo $data_final; ?>"><br><br>

        <input type="submit" value="Pesquisar" name="PesqEntredata"><br><br>
    </form>

    <?php

    if (!empty($dados['PesqEntredata'])) {

        $query_usuarios = "SELECT id, nome, email, created 
                            FROM usuarios 
                            WHERE created BETWEEN :data_inicio AND :data_final";

        $result_usuarios = $conn->prepare($query_usuarios);
        $result_usuarios->bindParam(':data_inicio', $dados['data_inicio']);
        $result_usuarios->bindParam(':data_final', $dados['data_final']);
        $result_usuarios->execute();

        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
            //var_dump($row_usuario);
            extract($row_usuario);
            echo "ID: $id <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Cadastrado: " . date('d/m/Y H:i:s', strtotime($created)) . " <br>";
            echo "<hr>";
        }
    }

    ?>
</body>

</html>