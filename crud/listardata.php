<?php
include_once "conexao_a.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listar por data</title>
    <link rel="shortcut icon" href="images/..." />
</head>

<body>

    <a href="cadastrar.php">Cadastrar</a><br>
    <h2>Listar Usuarios por data</h2>

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    ?>

    <form method="POST" action="">
        <!--Inicio do procurar por data-->
        <?php
        $data_inicio = "";
        if (isset($dados['data_inicio'])) {
            $data_inicio = $dados['data_inicio'];
        }
        ?>
        <label>Data de Inicio</label>
        <input type="date" name="data_inicio" value="<?php echo $data_inicio; ?>"><br><br>

        <?php
        $data_final = "";
        if (isset($dados['data_final'])) {
            $data_final = $dados['data_final'];
        }
        ?>

        <label>Data de final</label>
        <input type="date" name="data_final" value="<?php echo $data_final; ?>"><br><br>

        <input type="submit" value="Pesquisar" name="PesqEntredata"><br><br>



    </form>

    <?php

    if (!empty($dados['PesqEntredata'])) {
        var_dump($dados);

        $query_data_cadastro = "SELECT id, nome, email, created FROM usuarios WHERE created BETWEEN :data_inicio AND :data_final";
        $result_data_cadastro = $conn->prepare($query_data_cadastro);
        $result_data_cadastro->bindParam(':data_inicio', $dados['data_inicio']);
        $result_data_cadastro->bindParam(':data_final', $dados['data_final']);
        $result_data_cadastro->execute();


        while ($row_data_cadastro = $result_data_cadastro->fetch(PDO::FETCH_ASSOC)) {
            //var_dump($row_data_cadastro);
            extract($row_data_cadastro);
            echo "ID: $id<br>";
            echo "Nome: $nome<br>";
            echo "E-mail: $email<br>";
            echo "CadastradoAqui:" . date('d/m/Y H:i:s', strtotime($created)) . "<br>";
            echo "<hr>";
        }
    }
    ?>
    <!--Final do procurar por data-->





</body>

</html>