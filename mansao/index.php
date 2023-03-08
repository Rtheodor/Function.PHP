<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Rafao - Select</title>
    <link rel="shortcut icon" href="images/..." />

</head>
<body>
<h2>Listar usuários</h2>
<?php
$query_usuarios = "SELECT id,nome,email FROM usuarios LIMIT 2";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

while($row_usuarios = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuarios);
    extract($row_usuarios);
    echo "ID $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "<hr>";
}

echo"<h2>Listar Usuario com Limit e OFFSET</h2> <br>";
$query_usuarios_x = "SELECT id,nome,email FROM usuarios LIMIT 5 OFFSET 4";
$result_usuarios_x = $conn->prepare($query_usuarios_x);
$result_usuarios_x->execute();

while($row_usuarios_x = $result_usuarios_x->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuarios);
    extract($row_usuarios_x);
    echo "ID $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "<hr>";
}

?>    
</body>
</html>

