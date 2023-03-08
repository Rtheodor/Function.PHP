<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies como funciona</title>
</head>
<body>
    <?php
        setcookie("afiliado", "5589", (time( )+(7*24*3600)));

        
        if(isset($_COOKIE['afiliado'])){
            $afiliado = $_COOKIE['afiliado'];
            echo "Número do afiliado: $afiliado <br>";
        }

        setcookie("logado", "R.C",(time()+(7*24*3600)));

        if(isset($_COOKIE['logado'])){
            $logado = $_COOKIE['logado'];
            echo "O $logado está logado! <br>";
        }else{
            echo "O usuário não está logado!";
        }
        

        setcookie("status"," online",(time()+(7*24*3600)));
        if(isset($_COOKIE['status'])){
            $status_jogador = $_COOKIE['status'];
            echo "Jogador está $status_jogador !<br>";
        }else{
            echo "Jogador está off-line";
        }

        setcookie("placadevideo"," RTX 1060",(time()+(7*24*3600)));

        if(isset($_COOKIE ['placadevideo'])){
            $placa_video = $_COOKIE['placadevideo'];
            echo "Placa de video selecionada é $placa_video <br>";
        }else{
            echo "Nenhuma peça selecionada.";
        }

        //exercicios de COOKIE

        setcookie("produto","895572",(time()+(180*24*3600)));

        if(isset($_COOKIE['produto'])){
           $produto_id = $_COOKIE['produto'];
           echo "O ID criado para o produto é: $produto_id<br>";

        }else{
            echo "IDdo produto não existe!";
        }


        setcookie("chave","6532",(time()+(7200)));

        if(isset($_COOKIE['chave'])){
          $chave = $_COOKIE['chave'];
          echo "Chave de acesso é: $chave ";
        }else{
            echo "Usuário não está logado ";
        }
    ?>
</body>
</html>