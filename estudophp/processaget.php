<?php
$nome_cliente= filter_input(INPUT_GET, "nome_cliente", FILTER_SANITIZE_STRING);
$email_cliente = filter_input(INPUT_GET,"email_cliente", FILTER_SANITIZE_STRING);
$senha_cliente = filter_input(INPUT_GET,"senha_cliente",FILTER_SANITIZE_STRING);

echo "Recebe nome do cliente: $nome_cliente <br><br>";
echo "Recebe E-mail do cliente: $email_cliente <br><br>";
echo "Recebe senha do cliente: $senha_cliente<br><br>";


    //42 - Estrutura de controle - IF, ELSEIF E ELSE
    echo"<hr><h2>Média para conceito </h2>";
    $nota_aluno = filter_input(INPUT_GET, "nota_aluno", FILTER_SANITIZE_STRING);

    echo "Nota do aluno é: $nota_aluno<br><br> ";

    if(($nota_aluno >= 8) OR ($nota_aluno == 10)){
        echo "O conceito é: A";
    }elseif(($nota_aluno >= 7)OR($nota_aluno == 7.9)){
        echo "O conceito é B";
    }elseif(($nota_aluno >= 6)OR($nota_aluno == 6.9)){
        echo "O conceito é C";
    }elseif(($nota_aluno >= 5)OR($nota_aluno == 5.9)){
        echo "O conceito é D";
    }elseif(($nota_aluno >= 0)OR($nota_aluno == 4.9)){
        echo "O conceito é E";
    }else{
        echo"ok, nao existe nota!";
    }


    
    //43 - Switch (Calcula porcentagem mais salario com aumento) 
    echo"<hr><h2>Veja seu salário com aumento </h2>";
    $codigo_colaborador = filter_input(INPUT_GET, "codigo_colaborador",FILTER_SANITIZE_STRING);
    $salario_colaborador = filter_input(INPUT_GET, "salario_colaborador",FILTER_SANITIZE_STRING);
     

    $escriturario_percento = 50;
    $secretaria_percento = 35;
    $caixa_percento = 20;
    $gerentee_percento = 10;
    $diretoro_percento = 5;


    switch($codigo_colaborador){
        case 1:
            $resultado_porcentagem = $salario_colaborador * ($escriturario_percento/100);
            $aumento_salario_t = $salario_colaborador + $resultado_porcentagem;
            
            echo "Escriturário(a) salário" .number_format($salario_colaborador ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 2:
            $resultado_porcentagem = $salario_colaborador * ($secretaria_percento/100);
            $aumento_salario_t = $salario_colaborador + $resultado_porcentagem;
            
            echo " Secretario(a) salário" .number_format($salario_colaborador ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 3:
            $resultado_porcentagem = $salario_colaborador * ($caixa_percento/100);
            $aumento_salario_t = $salario_colaborador + $resultado_porcentagem;
            
            echo " Caixa salário" .number_format($salario_colaborador ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 4:
            $resultado_porcentagem = $salario_colaborador * ($gerentee_percento/100);
            $aumento_salario_t = $salario_colaborador + $resultado_porcentagem;
            
            echo " Gerente salário" .number_format($salario_colaborador ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 5:
            $resultado_porcentagem = $salario_colaborador * ($diretoro_percento/100);
            $aumento_salario_t = $salario_colaborador + $resultado_porcentagem;
            
            echo " Diretor(a) salário" .number_format($salario_colaborador ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;

        default:
            echo "Opção não encontrada. <br>";
        break;
    }
    //final do switch

    ?>