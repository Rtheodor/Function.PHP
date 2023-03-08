<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Criar a sessão

    $_SESSION['id'] = 13;
    $_SESSION['nome'] ="R.C";
    
    //verificar se existe a sessão
    if(isset($_SESSION['id'])){
        echo "ID do usuário ".$_SESSION['id']." e o nome é ".$_SESSION['nome']."<br>";
    }else{
        "A sessão não encontrada <br>";
    }

    echo "<hr>";
    //excluir a sessão

    //unset($_SESSION['id'],$_SESSION['nome']);


    //verificar se existe a sessão
    if(isset($_SESSION['id'])){
        echo "ID do usuário ".$_SESSION['id']." e o nome é ".$_SESSION['nome']."<br>";
    }else{
        "A sessão não encontrada <br>";
    }

echo "<hr>";
    //inicio do exercicio

    //$_SESSION['msg'] = "Sucesso";

    if(isset($_SESSION['msg'])){
        echo "Usuário cadastrado com ". $_SESSION['msg']. "<br>";
    }else{
        echo "Usuário não foi cadastradoo! <br>";
    }

    //excluir a sessão
    //unset($_SESSION['msg']);

    if(isset($_SESSION['msg'])){
        echo "Usuário cadastrado com ". $_SESSION['msg']. "<br>";
    }else{
        echo "Usuário não foi cadastrado! <br>";
    }
   
    echo "<hr>";
    $_SESSION['msg'] = "MSG";
    
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        
    }

    //unset($_SESSION['msg']);
       
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        
    }

    ?>
    
</body>
</html>