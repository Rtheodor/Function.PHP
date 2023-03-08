<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulario via GET</title>
</head>

<body>
    <div>
        <h2>Cadastro usuário via GET</h2>

        <form method="GET" action="processaget.php">
            <label>Nome: </label>
            <input type="text" name="nome_cliente" placeholder="Digite o nome" required /><br><br>

            <label>E-mail: </label>
            <input type="email" name="email_cliente" placeholder="Digite o seu email" required /><br><br>

            <label>Senha: </label>
            <input type="password" name="senha_cliente" placeholder="Digite sua senha" required /><br><br>

            <input type="submit" value="Cadastrar" />
            <hr>
        </form>
    </div>
   
    <div>
        <h2>Média e conceito</h2>

                <form method="GET" action="processa.php">
                    <label>Nota do aluno: </label>
                    <input type="text" name="nota_aluno" placeholder="Digite a nota do aluno: " required /><br><br>
                    <label>Conceito: </label>
                    
                    <input type="submit" value="Enviar nota" />


                </form>
                <hr>
    </div>

    <div>
        <h2>Codigo e salário</h2>

                <form method="GET" action="processa.php">
                    <label>Codigo: </label>
                    <input type="text" name="codigo_colaborador" placeholder="Digite o codigo do colaborador: " required /><br><br>
                    <label>Salário: </label>
                    <input type="text" name="salario_colaborador" placeholder="Digite o salario do colaborador: " required /><br><br>
                    <input type="submit" value="Enviar" />


                </form>
            <hr>
    </div>
    
</body>

</html>