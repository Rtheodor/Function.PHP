<?php
    include "conexao.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
   
    <title>Exercicio BD 1</title>
    <link rel="shortcut icon" href="images/..." />

</head>
<body>
    <h2>Exercicio BD / PDO</h2>
   <?php
     echo "<h2>Listar o registro da tabela</h2>";

     $query_usuarios = "SELECT id,nome, sits_usuario_id
     FROM usuarios
     WHERE sits_usuario_id =2
     LIMIT 10";

     $result_usuarios = $conn ->prepare($query_usuarios);
     $result_usuarios->execute();

     while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
         //var_dump($row_usuario);
         extract($row_usuario);

         
     echo "ID: $id<br>";
     echo "Nome: $nome <br>";
     echo "Situação do usuário: $sits_usuario_id<br>";
     echo"<hr>";

     };




     
   ?>
</body>
</html>