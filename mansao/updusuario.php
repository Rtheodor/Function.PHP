<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Usuário</title>
    <link rel="shortcut icon" href="images/..." />
</head>
<body>
    <h2>Update Usuario</h2>
    <?php
    $id=2;
    $nome  = "Ororo";
    $email = "tempestade@xmen.com";
    
     $query_usuario = "UPDATE usuarios SET nome=:nome, email=:email
    WHERE id=:id
    LIMIT 1";
   $upd_usuario = $conn->prepare($query_usuario);
   $upd_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
   $upd_usuario->bindParam(':email', $email, PDO::PARAM_STR);
   $upd_usuario->bindParam(':id', $id, PDO::PARAM_INT);

   if($upd_usuario->execute()){
    echo"Usuário editado com sucesso!";
   }else{
        echo "Erro: Usuário editado com sucesso.";
   }
    ?>
</body>
</html>