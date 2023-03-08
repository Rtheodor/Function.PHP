<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="php icon" href="image/imagephp.ico"/>
    <title>Aprendendo PHP</title>
</head>
<body>
    <?php
        //Operadores de incremento
        echo "<h3>Pós-incremento</h3>";
        $a = 5;
        echo "Deve ser 5: ". $a++ . "<br>";
        echo "Deve ser 6: ". $a . "<br><br>";

        
        echo "<h3>Pré-incremento</h3>";
        $a = 5;
        echo "Deve ser 6: ". ++$a . "<br>";
        echo "Deve ser 6: ". $a . "<br><br>";

        echo "<h3>Pós-decremento</h3>";
        $a = 10;
        echo "Deve ser 10: ". $a-- . "<br>";
        echo "Deve ser 9: ". $a . "<br><br>";

        echo "<h3>Pré-decremento</h3>";
        $a = 10;
        echo "Deve ser 9: ". --$a . "<br>";
        echo "Deve ser 9: ". $a . "<br><br>";

        
        ///Operadores de comparação

        echo "<hr> <h2>Operadores de comparação</h2></hr> ";
            $a = 10;
            $b = 8;
            $c = 10;
            
            if($a == $b){
                echo "Verdadeiro o numero: $a é igual ao valor $b <br><br>";
            }else{
                echo "Falso: o número $a não é igual ao valor $b <br><br>";
            }

            if($a != $b){
                echo "Verdadeiro o numero: $a é diferente do valor $b <br><br>";
            }else{
                echo "Falso: o número $a não é diferente do valor  $b <br><br>";
            }

            if($a < $b){
                echo "Verdadeiro o numero: $a é maior do valor $b <br><br>";
            }else{
                echo "Falso: o número $a não é menor do valor  $b <br><br>";
            }

            if($a > $b){
                echo "Verdadeiro o numero: $a é maior que $b <br><br>";
            }else{
                echo "Falso: o número $a não é maior que $b <br><br>";
            }

            if($a <= $b){
                echo "Verdadeiro o numero: $a é menor e igual a $b <br><br>";
            }else{
                echo "Falso: o número $a não é menor e igual a $b <br><br>";
            }

            if($a >= $c){
                echo "Verdadeiro o numero: $a é maior ou igual a $c <br><br>";
            }else{
                echo "Falso: o número $a não é maior ou igual a $c <br><br>";
            }

        //Operadores Lógicos  
       
        echo"<hr><h2>Operadoes Lógicos</h2>";

        $x = 10;
        $y = 8;
        $z = 7; 
        //AND retorna TRUE se ambos os operadores forem verdadeiros.
        if(($x == 10 ) AND ($y == 8)){
            echo "Utilizando AND: Verdadeiro. <br><br> ";
        }else{
            echo "Utilizando AND: Falso. <br><br> ";
        }
        //OR retorna TRUE se um ou o outro forem verdadeiros
        if(($x == 10 ) OR ($z == 72)){
            echo "Utilizando OR: Verdadeiro. <br><br> ";
        }else{
            echo "Utilizando OR: Falso. <br><br> ";
        }
        //XOR retorna TRUE se um outro forem verdadeiros, mas não ambos.
        if(($x == 10 ) XOR ($z==12)){
            echo "Utilizando XOR: Verdadeiro. <br><br> ";
        }else{
            echo "Utilizando XOR: Falso. <br><br> ";
        }

        //! retorna TRUE se o operador não é verdadeiro
        if(!empty ($x)){
            echo "Utilizando !: Verdadeiro. <br><br> ";
        }else{
            echo "Utilizando !: Falso. <br><br> ";
        }

        //&& retorna TRUE se ambos os operadores forem verdadeiros
        if(($x == 10 ) && ($z==7)){
            echo "Utilizando &&: Verdadeiro. <br><br> ";
        }else{
            echo "Utilizando &&: Falso. <br><br> ";
        }

        //|| retorna TRUE se um ou outro forem verdadeiros.
        if(($x == 10 ) || ($z==72)){
            echo "Utilizando ||: Verdadeiro. <br><br> ";
        }else{
            echo "Utilizando ||: Falso. <br><br> ";
        }

        //for (<inicialização>;<condição>;<incremento ou decremento>);
        echo "<hr><h2>Usando for</h2>";
        for($bolas = 1; $bolas <=10; $bolas++){
            echo "Quantas bolas até o momento: $bolas <br>";
        }

        for($vagas = 10; $vagas >= 1; $vagas--){
            echo "Quantidades de vagas: $vagas <br>";
            echo  "Novo cadastro! <br><br>";
        }
        
        
        //foreach como usar
        echo "<hr><h2>Usando foreach</h2>";
        $alunos = ["j","k","l","m"];
        //var_dump($alunos);

        foreach ($alunos as $aluno) {
            echo "Nome: $aluno<br>";
        }

        echo "<br>";
        $estados=["Rio Grande do Sul", "Santa Catarina", "Paraná"];
    foreach($estados as $estado){
        echo "O estado é:  $estado<br>";
    }
    
    ?>
</body>
</html>