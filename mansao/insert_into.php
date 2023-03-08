<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Into</title>
    <link rel="shortcut icon" href="images/..." />
</head>
<body>
    <h2>Cadastrar Usuário</h2>

    <?php
        //Como colocar valores direto na QUERY(Não devemos fazer desta forma)
        /*$query_usuario = "INSERT INTO  usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
        VALUES ('Rafael', 'rafael@xmen.com', '6969', 1,1, NOW())";
         $cad_usuario = $conn->prepare($query_usuario);
         $cad_usuario->execute();*/

         //Colocar a variável com valor direto na QUERY
         //Não é recomendado inserir a variavel na QUERY

         /*$nome = "Fera";
         $email ="fera@xmen.com";
         $senha = "123465789";
         $sits_usuario_id  = 1;
         $niveis_acesso_id  = 2;

         $query_usuario = "INSERT INTO usuarios(nome, email, senha, sits_usuario_id,niveis_acesso_id, created) VALUES 
         ('$nome','$email','$senha','$sits_usuario_id','$niveis_acesso_id', NOW())";

         $criando_usuario = $conn->prepare($query_usuario);
         $criando_usuario->execute();*/
        
         //Atribui o link na QUERY e substituir o link pelo valor com bindParam
         //Instrução recomendada

         $nome = "Spike";
         $email ="spike@xmen.com";
         $senha = "654312346";
         $sits_usuario_id  = 1;
         $niveis_acesso_id  = 3;


         $query_cadastro_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) 
         VALUES( :nome,:email, :senha, :sits_usuario_id, :niveis_acesso_id, NOW())";
        
            $cad_usuario = $conn->prepare($query_cadastro_usuario);
            $cad_usuario -> bindParam(':nome', $nome, PDO::PARAM_STR);
            $cad_usuario -> bindParam(':email', $email, PDO::PARAM_STR);
            $cad_usuario -> bindParam(':senha', $senha, PDO::PARAM_STR);
            $cad_usuario -> bindParam(':sits_usuario_id', $sits_usuario_id, PDO::PARAM_INT);
            $cad_usuario -> bindParam(':niveis_acesso_id', $niveis_acesso_id, PDO::PARAM_INT);
            $cad_usuario->execute();

            if($cad_usuario->rowCount()){
                echo "Usuário cadastrado com sucesso! <br>";
                var_dump($cad_usuario->rowCount());
                //var_dump($conn->lastInsertId());
                //usando lastInsertId = traz o ultimo ID cadastrado.
                $ultimo_id = $conn->lastInsertId();
                echo "ID do registro cadastrado: $ultimo_id<br>";
            }else{
                echo "Usuário não cadastrado com sucesso! <br>";
            }

    ?>
    

</body>
</html>