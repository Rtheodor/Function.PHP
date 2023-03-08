<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario Update</title>
    <link rel="shortcut icon" href="images/..." />
</head>

<body>
    <h2>Editar Usuário</h2>
    <?php
    //Salvar as informações do usuário no banco de dados 
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


    if (!empty($dados['SendUpUsuario'])) {
        //var_dump($dados);
        try {
            $query_up_usuario = "UPDATE usuarios SET nome=:nome, email=:email,senha=:senha, sits_usuario_id=:sits_usuario_id, niveis_acesso_id=:niveis_acesso_id WHERE id=:id";

            $up_usuario = $conn->prepare($query_up_usuario);
            $up_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $up_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
            $up_usuario->bindParam(':senha', $senha_cript, PDO::PARAM_STR);
            $up_usuario->bindParam(':sits_usuario_id', $dados['sits_usuario_id'], PDO::PARAM_INT);
            $up_usuario->bindParam(':niveis_acesso_id', $dados['niveis_acesso_id'], PDO::PARAM_INT);
            $up_usuario->bindParam(':id', $dados['id'], PDO::PARAM_INT);

            if ($up_usuario->execute()) {
                echo "Usuario editado com sucesso";
            } else {
                echo "Ocorreu um erro ao tentar editar usuario";
            }
        } catch (PDOException $erro) {
            echo "Ocorreu um erro ao tentar editar usuario!";
            echo "Ocorreu um erro ao tentar editar usuario" . $erro->getMessage() . "<br>";
        }


    }

    //Receber o ID pela URL utilizando o método 
    //Ex: http://localhost/projetos/mansao/novoform.php?id_usuario=4
    //$id = filter_input(INPUT_GET, "id_usuario", FILTER_SANITIZE_NUMBER_INT);
    
    //ID estático
    $id = 2;
    try{
        //Pesquisar os informações do usuario no banco de dados
    
    $query_usuario = "SELECT id, nom, email, sits_usuario_id, niveis_acesso_id 
    FROM usuarios 
    WHERE id=:id 
    LIMIT 1";

   $result_usuario = $conn->prepare($query_usuario);
   $result_usuario->bindParam(":id", $id, PDO::PARAM_INT);
   $result_usuario->execute();

   $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
   //var_dump($row_usuario);

    }catch(PDOException  $erro){
        echo "Erro: Usuários não encontrado!";
        //echo "Erro: Usuário não encotrado. ERRO gerado: " . $erro->getMessage() . "<br>";
    }
    
    ?>

    <form method="POST" action="">
        <?php
        $id = "";
        if (isset($row_usuario['id'])) {
            $id = $row_usuario['id'];
        }
        ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label>Nome</label>
        <?php

        //esta é a primeira forma, para fixar informações nos campos de input.
        $nome = "";
        if (isset($dados['nome'])) {
            $nome = $dados['nome'];
        }
        ?>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $nome; ?>" required><br><br>

        <label>Email</label>
        <?php

        $email = "";
        if (isset($dados['email'])) {
            $nome = $dados['email'];
        }
        ?>

        <input type="email" name="email" placeholder="Digite um E-mail valido " value="<?php echo $email; ?>"
            required><br><br>

        <label>Senha</label>

        <input type="password" name="senha" placeholder="Digite uma senha" required><br><br>

        <label>Situação</label>

        <?php
        $query_sits_usuarios = "SELECT id, nome FROM sits_usuarios ORDER BY nome ASC";
        $result_sits_usuarios = $conn->prepare($query_sits_usuarios);
        $result_sits_usuarios->execute();
        ?>
        <select name="sits_usuario_id">
            <option value="">Selecione</option>
            <?php
            //Essa parte a logica me pegou um pouco
            while ($row_sit_usuario = $result_sits_usuarios->fetch(PDO::FETCH_ASSOC)) {
                extract($row_sit_usuario);

                $select_sits_usuario = "";
                if (isset($dados['sits_usuario_id']) and ($dados['sits_usuario_id'] == $id)) {
                    $select_sits_usuario = "selected";
                } elseif ((!isset($row_usuario['sits_usuario_id'])) and (isset($row_usuario['sits_usuario_id']) and ($row_usuario['sits_usuario_id'] == $id))) {
                    $select_sits_usuario = "selected";
                }
                echo "<option value='$id'$select_sits_usuario>$nome</option>";
            }

            ?>

        </select><br><br>


        <?php
        $query_niveis_acessos = "SELECT id, nome FROM niveis_acessos ORDER BY nome ASC";
        $result_niveis_acessos = $conn->prepare($query_niveis_acessos);
        $result_niveis_acessos->execute();
        ?>
        <label>Níveis de Acesso</label>

        <select name="niveis_acesso_id">
            <option value="">Selecione</option>
            <?php
            //Essa parte a logica me pegou um pouco
            while ($row_nivel_acesso = $result_niveis_acessos->fetch(PDO::FETCH_ASSOC)) {
                extract($row_nivel_acesso);

                $select_niv_acesso = "";
                if (isset($dados['niveis_acesso_id']) and ($dados['niveis_acesso_id'] == $id)) {
                    $select_niv_acesso = "selected";
                } elseif ((!isset($row_usuario['niveis_acesso_id'])) and (isset($row_usuario['niveis_acesso_id']) and ($row_usuario['niveis_acesso_id'] == $id))) {
                    $select_niv_acesso = "selected";
                }
                echo "<option value='$id'$select_niv_acesso>$nome</option>";
            }

            ?>

        </select><br><br>
       
        <input type="submit" value="Editar" name="SendUpUsuario" required><br><br>


    </form>

</body>

</html>