<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Fomulario via POST</title>
</head>

<body>
    <div>
        <h2>Cadastro usuário via POST</h2>

        <form method="POST" action="processapost.php">
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
        <h2>Envie seu artigo!</h2>
        <form method ="POST" action="processapost.php">
        <label>Titulo do Artigo: </label>
            <input type="text" name="artigo_cliente" placeholder="Digite o nome do artigo " required /><br><br>
        <label>Campo do artigo.</label><br><br>
        <input textarea id="msg" name="area_artigo"></textarea><br><br>

        <input type="submit" value="Enviar artigo" />
        </form>
</div>
</div>
    
</body>

</html>