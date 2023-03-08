<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--1) Escreva uma página HTML que -->
    <h1>“Sorteio da mega sena”</h1>


    <?php
    //3) Modifique o echo escrito acima para que utilize variáveis
    $primeiro = 10;
    $segundo = 20;
    $terceiro = 30;
    $quarto = 40;
    $quinto = 50;
    $sexto = 60;

    //2) Modifique a página acima para que o texto dos parágrafos seja feito em PHP
    echo "<p>Bem-vinda, Elissandra!</p>";
    echo "<p>Os números são:" . $primeiro . "-" . $segundo . "-" . $terceiro . "-" . $quarto . "-" . $quinto . "-" . $sexto . "</p><br><br>";


    //4) Faça com que os números sejam gerados de forma aleatória a cada vez que atualizar a página.
    echo "Número gerado de forma aleatória a cada vez que atualiza a pagina. " . "<br> ";
    echo rand(10, 60) . "<br><br>";
    echo "Formato com variavel." . "<br>";
    $numero = rand(10, 60);
    echo $numero . "<br><br>";

    //5) Adicione um parágrafo que mostra a soma de todos os números sorteados
    //$resultado = $a + $b + $c + $d + $e + $f;
    //echo "<p>"." soma de todos os números sorteados é: ". $resultado."</p>";
    


    //6) Crie uma função que some todos os números sorteados e substitua a soma acima.
    
    echo "Numeros do sorteio somados" . "<br>";

    /*
    function soma($num_1,$num_2){
    $total = $num_1 + $num_2;
    
    return $total."<br>";
    
    }
    
    //definido os valores para as variáveis
    echo soma(10,50);*/

    function fodase($a, $b, $c, $d, $e, $f)
    {
        $resultado = $a + $b + $c + $d + $e + $f;
        return $resultado;

    }
    echo fodase(10, 20, 30, 40, 50, 60) . "<br><br>";


    ?>

    <!--8) Crie no fim da página uma lista chamada “Últimos sorteios”, que mostre os 5 últimos números sorteados.-->
    <h2>Útimos sorteios</h2>
    <?php


    //$pqp = kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    $primeiro_numero = rand(10, 60);
    $segundo_numero = rand(10, 60);
    $terceiro_numero = rand(10, 60);
    $quarto_numero = rand(10, 60);
    $quinto_numero = rand(10, 60);

    echo "<ul><li>$primeiro_numero-$segundo_numero-$terceiro_numero- $quarto_numero-$quinto_numero</li></ul>";



    echo "Teste total" . "<br>";
    $primeiro_numero = 0;
    $i = 0;

    while ($i < 5) {
        $i++;
        //include "sorteio.php";   
        
        include_once("sorteio.php");

    }



    ?>

    <br><a href="teste.php">Sorteio</a><br>
</body>

</html>
<!--7) Crie um botão “Sortear de novo” que faz com que os números sorteados sejam renovados
    https://www.freecodecamp.org/portuguese/news/o-metodo-location-reload-como-recarregar-uma-pagina-em-javascript/
    #:~:text=reload()%20recarrega%20a%20p%C3%A1gina,adicionar%20Location.-->

<br><br><br><input type="button" value="Botão de Atualizar" onClick="window.location.reload()">