<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Order By -> Asc E Desc</title>
    <link rel="shortcut icon" href="images/..." />
</head>
<body>
<h2>Order By -> Asc E Desc</h2>
<?php
    $query_usuarios_r = "SELECT  id, nome, email, sits_usuario_id, niveis_acesso_id 
    FROM usuarios
    ORDER BY id DESC";

$result_usuarios_q = $conn->prepare($query_usuarios_r);
$result_usuarios_q->execute();

while($row_usuario_s = $result_usuarios_q->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuario_s);
    extract($row_usuario_s);
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