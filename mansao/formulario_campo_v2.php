<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <title>Formulario Insert Into</title>
       <link rel="shortcut icon" href="images/..." />
    </head>
<body>
    <?php 
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($dados['SendCadUsuario'])){
            //var_dump($dados);
            // try{}catch usado para mostrar, um tipo de erro no navegodor para cliente eo desenvolvedor.
            try{
            $query_usuario = "INSERT INTO usuarios(nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
        VALUES(:nome, :email, :senha, :sits_usuario_id, :niveis_acesso_id, NOW())";

        $cad_usuario = $conn->prepare($query_usuario);

        $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
        $cad_usuario->bindParam(':senha', $senha_cript);
        $cad_usuario->bindParam(':sits_usuario_id', $dados['sits_usuario_id'], PDO::PARAM_INT);
        $cad_usuario->bindParam(':niveis_acesso_id', $dados['niveis_acesso_id'], PDO::PARAM_INT);

        $cad_usuario->execute();

        if($cad_usuario->rowCount()){
            echo "Usuário cadastrado com sucesso!<br>";
            unset($dados);
        }else{
            "Usuário não cadastrado com sucesso!<br>";
        }

        }catch(PDOException $erro){
            echo "ERRO:Usuário não cadastrado com sucesso!<br>";
            //echo "ERRO:Usuário não cadastrado com sucesso. Erro gerado: ".$erro->getMessage() . " <br>";
        }
    }

        
    ?>

<h2>Cadastrar Usuário</h2>
    <form method="POST" action="">
    <label>Nome</label>
    <?php
    //esta é a primeira forma, para fixar informações nos campos de input.
    //isset seginifica: se exixtir

    $nome ="";
    if(isset($dados['nome'])) {
        $nome = $dados['nome']; }
    ?>
    <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $nome;?>" required /><br><br>

    <label>E-mail</label>
        <!-- segunda forma de para fixar imformações nos campos de input value=?php if(isset($dados['email']))
    {echo $dados['email']; }?> -->
    <input type="email" name="email" placeholder="Seu melhor E-mail" value="<?php if(isset($dados['email']))
    {echo $dados['email']; }?>" required /><br><br>
    
    <label>senha</label>
    <input type="password" name="senha" placeholder="Digite uma senha." value="<?php if(isset($dados['senha']))
    {echo $dados['senha']; }?>" required /><br><br>
    
    <label>Situação do Usuário</label>
    <input type="number" name="sits_usuario_id" placeholder="Situação do Usuário" value="<?php if(isset($dados['sits_usuario_id']))
    {echo $dados['sits_usuario_id']; }?>" required /><br><br>

    <label>Número de acesso</label>
    <input type="number" name="niveis_acesso_id" placeholder="Número de acesso do usuário" value="<?php if(isset($dados['niveis_acesso_id']))
    {echo $dados['niveis_acesso_id']; } ?>" required /><br><br>

    
    <input type="submit"  value="Cadastrar" name="SendCadUsuario" />
</fomr>
</body>
</html>