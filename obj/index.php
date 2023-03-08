<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    require './Usuario.php';
    $usuario = new Usuario();
    $msg = $usuario->cadastrar("Rafael ",33,"rafael@teste.com.br");
    echo $msg;



    
    ?>
</body>

</html>