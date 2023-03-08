<?php
/* Idade em PHP */
echo "Idade em PHP"."<br>";
$idade = 33;
$nome = "Rafael";

echo "O aluno $nome tem " . $idade . " anos. "."<br><hr>";

/*Como converter variável em PHP */
echo "Como converter variável em PHP"."<br>";

$result = "2";

echo "Resultado exemplo um " . $result . "<br>";
var_dump($result);

$result_dois = $result + 1;
echo "Resultado dois " . $result_dois . "<br>";
var_dump($result_dois);

$result_tres = $result_dois + 3.5;
echo "Resultado tres " . $result_tres . "<br>";
var_dump($result_tres);

$result_quatro = 11;

var_dump($result_quatro);

$result_cinco = (double) $result_quatro;
echo "Resultado cinco " . $result_cinco . "<br>";
var_dump($result_cinco);

$result_seis = 8.9;
var_dump($result_seis);

$result_sete =  (int) $result_seis;
echo "Resultado exemplo sete " . $result_sete . "<br>";
var_dump($result_sete);

echo "<hr>";

/* Como usar operadores aritméticos com PHP */
echo "<p>"."Como usar operadores aritméticos com PHP"."</p><br>";

/* Como usar operadores aritméticos com PHP */
echo "Como usar operadores aritméticos com PHP"."<br><br>";

$a = 2;
$b = 4;
$c = 7;

$result_soma = $a + $b;
echo "Soma : $result_soma <br><br>";

$result_subtracao = $b - $a;
echo "Subtração:  $result_subtracao<br><br>";

$result_mult = $a * $b;

echo "Multiplicação: $result_mult <br><br>";

$result_divisao = $b / $a;

echo "Divisão $result_divisao <br><br>";

$result_resto = $c % $a;

echo "Resto: $result_resto <br><br>";

echo "<hr>";

$cc = 10000.680;
/*number_format é utilizada para converter o valor em real */
echo "number_format é utilizada para converter o valor em real"."<br><br>";

echo "Valor em conta: R$ " . number_format($cc, 2, ",", ".")."<br><br>";

$debito = 670.50;
echo "Valor do debito: R$ " . number_format($debito, 2, ",", ".")."<br><br>";

$result_real =$cc - $debito;
echo "Saldo: R$ " . number_format($result_real, 2, ",",".")."<br><br>";


//como usar operadores de atribuição PHP
echo "<hr>";
echo "Como usar operadores de atribuição PHP"."<br><br>";
$a = 1;
$b = 2;
$c = 3;
$result = 6;


//Operadores de atribuição exemplos: += , -=, *=, /=, %=
echo " Operadores de atribuição exemplos: += , -=, *=, /=, %="."<br><br>";
echo "Somar o valor $result pelo valor $a <br>";
$result +=$a;
echo "Resultado da adição: $result <br><br>";

echo "Subtrair o valor $result pelo  valor $b <br>";
$result -= $b;
echo "Resultado da subtração $result <br><br>";

echo "Multiplicar o valor $result pelo  valor $b <br>";
$result *= $b;
echo "Resultado da multiplicação $result <br><br>";

echo "Divisão o valor $result pelo  valor $b <br>";
$result /= $b;
echo "Resultado da divisão $result <br><br>";

echo "o resto do valor $result pelo  valor $b <br>";
$result %= $b;
echo "Resultado do módulo $result <br><br>";

//Concatenando 
/*
$d = "Bom";
$d1 .= "dia";
$d2 .= "Rafael";
echo $d"<br>";*/


//switch
echo"<hr>";
$y=3;
switch($y){
    case 1:
        echo "Sacar dinehiro. <br>";
        break;

    case 2:
        echo "Depositar dinheiro. <br>";
        break;
    
    case 3:
        echo "Imprimir cheque. <br>";
        break;
    default:
        echo "Opção não encontrada. <br>";
    break;
}

echo"<br>";
//While

$k=1;
//O while é o comando de repetição
while($k <= 10){
    echo "Cadastro: $k <br>";
    //Incrementar a condição utilizada no while
    $k++;
}

echo "<hr>";

$y=1;
$t = 10;
$o=$y;

while($o<$y){

    echo "Numeros intermediarios são: $o ";
    $o++;
  
}

echo "Email enviado<br><br>";

$p = 1;

do{
    echo "Email enviado: $p <br>";
    $p++;
}while($p<=10);
