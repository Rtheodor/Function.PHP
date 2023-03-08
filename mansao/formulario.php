<?php
include_once "conexao.php";
//error_reporting(0);
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

    if (!empty($dados['SendCadUsuario'])) {
        //var_dump($dados);
        // try{}catch usado para mostrar, um tipo de ação inesperada no navegodor para cliente eo desenvolvedor.
    
        try {
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

            if ($cad_usuario->rowCount()) {
                echo "Usuário cadastrado com sucesso!<br>";
                unset($dados);
            } else {
                "Usuário não cadastrado com sucesso!<br>";
            }

        } catch (PDOException $erro) {
            trigger_error("Usuário não cadastrado com sucesso!");
            trigger_error("ERRO:Usuário não cadastrado com sucesso. Erro gerado: ". $erro->getMessage());
            //echo "ERRO:Usuário não cadastrado com sucesso!<br>";
            
            //echo "ERRO:Usuário não cadastrado com sucesso. Erro gerado: " . $erro->getMessage() . " <br>";
        }
    }


    ?>

    <h2>Cadastrar Usuário</h2>
    <form method="POST" action="">
        <label>Nome</label>
        <?php
        //esta é a primeira forma, para fixar informações nos campos de input.
        //isset significa: se existir
        
        $nome = "";
        if (isset($dados['nome'])) {
            $nome = $dados['nome'];
        }
        ?>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $nome; ?>" required /><br><br>

        <label>E-mail</label>
        <!-- segunda forma de para fixar imformações nos campos de input value=?php if(isset($dados['email']))
    {echo $dados['email']; }?> -->
        <input type="email" name="email" placeholder="Seu melhor E-mail" value="<?php if (isset($dados['email'])) {
            echo $dados['email'];
        } ?>" required /><br><br>

        <label>senha</label>

        <input type="password" name="senha" placeholder="Digite uma senha." required /><br><br>

        <?php
        $query_sits_usuarios = "SELECT id, nome FROM sits_usuarios ORDER BY nome ASC";
        $result_sits_usuarios = $conn->prepare($query_sits_usuarios);
        $result_sits_usuarios->execute();
        ?>

        <label>Situação do Usuário: </label>
        <select name="sits_usuario_id" required>
            <option value="">Selecione</option>
            <?php
            /*fecth está sendo usado para ler o valor. PDO - biblioteca que esta sendo usada. 
            FETCH_ASSOC USADO PARA IMPRIMIR ATRAVES DO NOME DA COLUNA.*/
            while ($row_sit_usuario = $result_sits_usuarios->fetch(PDO::FETCH_ASSOC)) {
                $select_sit_usuario = "";

                if (isset($dados['sits_usuario_id']) and ($dados['sits_usuario_id'] == $row_sit_usuario['id'])) {
                    $select_sit_usuario = "selected";
                }

                echo "<option value='" . $row_sit_usuario['id'] . "' $select_sit_usuario>" . $row_sit_usuario['nome'] . "</option>";
            }
            ?>
        </select>
        <br><br>

        <?php
        $query_niveis_acessos = "SELECT id, nome FROM niveis_acessos ORDER BY nome ASC";
        $result_niveis_acessos = $conn->prepare($query_niveis_acessos);
        $result_niveis_acessos->execute();
        ?>


        <label>Nível de Acesso: </label>
        <select name="niveis_acesso_id" required>
            <option value="">Selecione</option>
            <?php
            while ($row_nivel_acesso = $result_niveis_acessos->fetch(PDO::FETCH_ASSOC)) {
                $sel_nivel_acesso = "";

                if (isset($dados['niveis_acesso_id']) and ($dados['niveis_acesso_id'] == $row_nivel_acesso['id'])) {
                    $sel_nivel_acesso = "selected";
                }

                echo "<option value='" . $row_nivel_acesso['id'] . "' $sel_nivel_acesso>" . $row_nivel_acesso['nome'] . "</option>";
            }
            ?>
        </select>
        <br><br>


        <input type="submit" value="Cadastrar" name="SendCadUsuario" />
    </form>
</body>

</html>