<?php
include_once "conexao_a.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RT-Delet</title>
    <link rel="shortcut icon" href="images/..." />

</head>

<body>
    <h2>RT-Delet</h2>

    <?php
    //Aqui recebemos o ID estatico 
    $id = 13;
    $query_usuario = "DELETE FROM usuarios WHERE id=:id LIMIT 1";
    $delet_usuario = $conn->prepare($query_usuario);
    $delet_usuario->bindParam(':id', $id, PDO::PARAM_INT);

    if ($delet_usuario->execute()) {
        echo "Usuario deletado com sucesso!<br>";
    } else {
        echo "Erro: Usuario não deletado com sucesso<br>";
    }

    ?>

</body>

</html>