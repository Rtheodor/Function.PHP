    <?php

    /*Somar e imprimir na tela no formato do Real */
    $comissao = 2320.29;
    $salario = 7600.25;

    $somatoria = $comissao + $salario;
    echo "Soma de tudo será: R$ " .number_format($somatoria,2,",","."). "<br><br>";

    echo "<hr>";

    /* */
    $comissao_dois = 1321.45;
    $salario_dois = 7600.25;

    $somatoria_dois = $comissao_dois + $salario_dois;
    echo "Somatoria da comissão R$ " .number_format($comissao_dois,2,",",".") . " mais salário R$ ". number_format($salario_dois,2,",",".") ." é R$ ". number_format($somatoria_dois,2,",",".")."<br><br>";

    //INSS E IRRF A SEREM SUBTRAIDOS
    $inss = 608.45;
    $irrf = 1364.65;
    echo "Valores de Inss e IRRF a serem subtraidos: Valor do Inss R$ " .number_format($inss, 2,",",".")  . " IRRF R$ ". number_format($irrf, 2,",",".")."<br><br>";

    $somatoria_inss_irrf = $inss + $irrf;
    echo "Valor total a ser subtraido do salário R$ ". number_format($somatoria_inss_irrf, 2,",",".")."<br><br>";

    $subtracao_final =  $somatoria_dois - $somatoria_inss_irrf;
    echo " Valor total do salario em conta R$ " . number_format($subtracao_final, 2,",",".");

    echo "<hr>";

    //Divisao

    $compra = 1220.44;
    $parcelas = 4;

    $compra_parcelada = $compra / $parcelas;
    echo "Valor das parcelas R$ " .$compra_parcelada;

    echo"<hr>";

    //Multiplicação de unidades e valor
    $unidades = 58;
    $valor_produto_a = 280.74;

    $valor_produto_junho = $unidades * $valor_produto_a;

    echo "Valor total do mes de Junho R$ ". number_format($valor_produto_junho, 2,",",".");

    //Operadores de atribuição
    echo"<hr>";
    $comissao_tres = 1321.45;
    $salario_tres = 7600.25;

    $comissao_tres += $salario_tres;
    echo "Valor somados R$ " .number_format($comissao_tres, 2, ",",".")."<br><br>"; 

    $inss_dois = 608.45;
    $irrf_dois = 1364.65;

    $irrf_dois -= $inss_dois;

    echo "Valor somados R$ " .number_format($irrf_dois, 2, ",",".")."<br><br>";

    $compra_dois = 1220.44;
    $parcelas_dois = 4;

    $compra_dois /= $parcelas_dois;
    echo "Valor das parcelas R$ " .number_format($compra_dois, 2, ",",".")."<br><br>";

    $unidades_dois = 58;
    $valor_produto_tres = 280.74;

    $unidades_dois *= $valor_produto_tres;

    echo "Valor total do mes de Junho R$ ". number_format($unidades_dois, 2,",",".");

    //exercicios operadores de incremeto e decremento
    echo "<hr> <h2>Operadores de Incremento e Decremento</h2></hr> ";

    $produto_a = 115;
    echo "Quantidade do produto A: ".--$produto_a."<br><br>";
    echo "Quantidade do produto A: ".$produto_a."<br><br>";

    $veiculos = 1529;
    echo "Veiculos ate o momento: ".number_format($veiculos++, 2, ".",".")."<br>";
    echo "Veiculos que passram: ".number_format($veiculos++, 2, ".",".")."<br>";

    //operadores de comparação
    echo"<hr><h2>Operadores de comparação</h2>";
    $contenier = 10;
    $foram_carregados = 10;

    if($contenier == $foram_carregados){
        echo "Já foram carregados : $contenier Contênier(Carregammento concluído)<br><br>";
    }else{
        echo "Não foram carregados os $contenier Contênier <br><br>";
    }

    //Obter bolsa para aluno

    $aluno = 10;
    $bolsa_media = 8.5;

    if($aluno >= $bolsa_media){
        echo "Aluno apto a bolsa, sua media é: $aluno <br><br>";
    }else{
        echo "Aluno não atingiu a media  $bolsa_media para a bolsa, sua média foi: $aluno.";
    }

    //Atleta e categoria
    $peso = 80;
    $categoria_novato = 60;
    $categoria_profissional = 80;

    if($peso <= $categoria_novato){
        echo "Atleta está na categoria Novato $peso.";
    }else{
        echo "Atleta na categoria Profissional $peso.";
    }


    //Operadores Lógico
    echo "<hr><h2>Operadores Lógicos</h2>";
    $peso_novato = 60;
    $altura_novato = 1.70;

    $peso_do_atleta = 59;
    $altura_do_atleta = 1.70;


    if(($peso_do_atleta <= $peso_novato) AND  ($altura_do_atleta <= $altura_novato)){
        echo "Atleta está na catetoria: Novato <br><br>";
    }else {
    echo "Atleta está na categoria: Profissional <br><br>";
    }


    //Aluno e media
    $nota_do_aluno = 8.6;
    $media_aluno = 8.5;
    $frequencia_aluno = 71;
    $frequencia_aula = 70;

    if(($nota_do_aluno > $media_aluno )&&( $frequencia_aluno > $frequencia_aula )){
        echo "Aluno aprovado para a bolsa. <br><br> ";
    }else{
        echo "Aluno não aprovado para a bolsa.<br><br>";
    }

    //Números iguais ou o maior

    $primeiro_numero = 3;
    $segundo_numero = 2;

    if($primeiro_numero > $segundo_numero){
        echo"O primeiro numero $primeiro_numero é maior que o segundo número $segundo_numero .<br><br> ";
    }else{
        echo "O segundo numero $segundo_numero  é maior que o primeiro número $primeiro_numero .<br><br>";
    }

    //Estrutura de Controle - IF e ELSE
    echo"<hr><h2>Usando estrutura de controle IF E ELSE </h2>";

    $salario_cargo_atual = 4000.00;
    $codigo_cargo = 92;

    $codigo_gerente = 91;
    $codigo_analista = 92;
    $codigo_tecnico = 93;
    

    $percentual_gerente = 10;
    $percentual_analista = 20;
    $percentual_tecnico = 30;
    $percentual_fora_tabela = 35.5;

    $resultado_aumento_gerente = $salario_cargo_atual * ($percentual_gerente/100);


    $resultado_aumento_analista = $salario_cargo_atual * ($percentual_analista/100);

    $resultado_aumento_tecnico = $salario_cargo_atual * ($percentual_tecnico/100);

    $resultado_aumento_fora_tabela = $salario_cargo_atual * ($percentual_fora_tabela/100);

    $aumento_salario_total_gerente = $salario_cargo_atual + $resultado_aumento_gerente;
    $aumento_salario_total_analista = $salario_cargo_atual + $resultado_aumento_analista;
    $aumento_salario_total_tecnico = $salario_cargo_atual + $resultado_aumento_tecnico;
    $aumento_salario_total_fora_tabela = $salario_cargo_atual + $resultado_aumento_fora_tabela;


    if($codigo_cargo == $codigo_gerente){
        echo "Olá Gerente, valor do aumento é de: $resultado_aumento_gerente , 
        valor total do salario mais aumento é de:" 
        .number_format($aumento_salario_total_gerente, 2, ".",".")."<br>";
        
    }elseif($codigo_cargo == $codigo_analista){
        echo "Seu codigo é 92: Cargo Analista, valor do aumento é de: $resultado_aumento_analista , 
        valor total do salario mais aumento é de:" 
        .number_format($aumento_salario_total_analista, 2, ".",".")."<br><br>";
    }
    elseif($codigo_cargo == $codigo_tecnico){
        echo "Seu codigo é 93: Cargo Técnico, valor do aumento é de: $resultado_aumento_tecnico , 
        valor total do salario mais aumento é de:" 
        .number_format($aumento_salario_total_tecnico, 2, ".",".")."<br><br>";
    }
    else{
        echo "Olá, valor do aumento é de: $resultado_aumento_fora_tabela , 
        valor total do salario mais aumento é de:" 
        .number_format($aumento_salario_total_fora_tabela, 2, ".",".")."<br><br>";
    }

    //exemplo do Fafa começa aqui.
    /*$salario_cargo_atual = 4000.00;
    
    $codigo_cargo = 93;
    
    $codigo_gerente  = 91;
    $codigo_analista = 92;
    $codigo_tecnico  = 93;
    
    
    $percentual_gerente     = 10;
    $percentual_analista    = 20;
    $percentual_tecnico     = 30;
    $percentual_fora_tabela = 35.5;
    
    
    if($codigo_cargo == $codigo_gerente){
            $resultado_aumento = $salario_cargo_atual * ($percentual_gerente/100);
            $aumento_salario_total = $salario_cargo_atual + $resultado_aumento;
        
            echo "Olá Gerente, valor do aumento é de: R$ {$resultado_aumento} ,valor total do salario mais aumento é de: R$ ".number_format($aumento_salario_total, 2, ".",".")."<br>";
    
    }elseif($codigo_cargo == $codigo_analista){
            $resultado_aumento = $salario_cargo_atual * ($percentual_analista/100);
            $aumento_salario_total = $salario_cargo_atual + $resultado_aumento;
        
            echo "Seu codigo é 92: Cargo Analista, valor do aumento é de: R$ {$resultado_aumento} ,valor total do salario mais aumento é de: R$ ".number_format($aumento_salario_total, 2, ".",".")."<br>";
    }
    elseif($codigo_cargo == $codigo_tecnico){
            $resultado_aumento = $salario_cargo_atual * ($percentual_tecnico/100);
            $aumento_salario_total = $salario_cargo_atual + $resultado_aumento;
        
        echo "Seu codigo é 93: Cargo Técnico, valor do aumento é de: R$ {$resultado_aumento} ,valor total do salario mais aumento é de: R$ ".number_format($aumento_salario_total, 2, ".",".")."<br>";
    }
    else{
            $resultado_aumento = $salario_cargo_atual * ($percentual_fora_tabela/100);
            $aumento_salario_total = $salario_cargo_atual + $resultado_aumento;
        echo "Olá, valor do aumento é de: R$ {$resultado_aumento}, valor total do salario mais aumento é de: R$ " .number_format($aumento_salario_total, 2, ".",".")."<br>";
    }*/

    //Exercicio aluno aprovado ou reprovado

    $nota_aluno_A = 10;
    $media_aluno_A = 7;

    if($nota_aluno_A >= $media_aluno_A){
        echo "Aluno aprovado!";
    }else{
        echo "Aluno reprovado.";
    }

    //Estrutura de controle - IF, ELSEIF E ELSE
    echo"<hr><h2>Usando IF, ELSEIF E ELSE </h2>";
    $notaa_aaluno = 0.3;

    if(($notaa_aaluno >= 8) OR ($notaa_aaluno == 10)){
        echo "O conceito é: A";
    }elseif(($notaa_aaluno >= 7)OR($notaa_aaluno == 7.9)){
        echo "O conceito é B";
    }elseif(($notaa_aaluno >= 6)OR($notaa_aaluno == 6.9)){
        echo "O conceito é C";
    }elseif(($notaa_aaluno >= 5)OR($notaa_aaluno == 5.9)){
        echo "O conceito é D";
    }elseif(($notaa_aaluno >= 0)OR($notaa_aaluno == 4.9)){
        echo "O conceito é E";
    }else{
        echo"ok, nao existe nota!";
    }

    //Switch (Calcula porcentagem mais salario com aumento) 
    echo"<hr><h2>Usando Switch </h2>";

    $braba_codigo = 8;
    $salario_atual =4000;

    $escriturario_percento = 50;
    $secretaria_percento = 35;
    $caixa_percento = 20;
    $gerentee_percento = 10;
    $diretoro_percento = 5;


    switch($braba_codigo){
        case 1:
            $resultado_porcentagem = $salario_atual * ($escriturario_percento/100);
            $aumento_salario_t = $salario_atual + $resultado_porcentagem;
            
            echo "Escriturário salário" .number_format($salario_atual ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 2:
            $resultado_porcentagem = $salario_atual * ($secretaria_percento/100);
            $aumento_salario_t = $salario_atual + $resultado_porcentagem;
            
            echo " Secretario(a) salário" .number_format($salario_atual ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 3:
            $resultado_porcentagem = $salario_atual * ($caixa_percento/100);
            $aumento_salario_t = $salario_atual + $resultado_porcentagem;
            
            echo " Caixa salário" .number_format($salario_atual ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 4:
            $resultado_porcentagem = $salario_atual * ($gerentee_percento/100);
            $aumento_salario_t = $salario_atual + $resultado_porcentagem;
            
            echo " Gerente salário" .number_format($salario_atual ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;
        
        case 5:
            $resultado_porcentagem = $salario_atual * ($diretoro_percento/100);
            $aumento_salario_t = $salario_atual + $resultado_porcentagem;
            
            echo " Diretor(a) salário" .number_format($salario_atual ,2, ".",".")." Salário mais porcentagem somados. ".number_format($aumento_salario_t ,2, ".","."). "";
            
        break;

        default:
            echo "Opção não encontrada. <br>";
        break;
    }

    //Switch status do codigo
    echo"<hr><h2>Usando Switch </h2>";
    $codigo_status = 30;

    switch($codigo_status){
        case 10:
            echo "Aguardando pagamento";
        break;
        
        case 20:
            echo "Pago.";
        break;

        case 30:
            echo "Em transporte.";
        break;

        case 40:
            echo "Entregue.";
        break;
        
        default:
            echo "Opçãp invalida!";
        break;

    }

    //While 
    echo"<hr><h2>Usando While</h2>";
    $gloria_jesus = 1;

    while($gloria_jesus <= 10){
        echo "Louvar a Deus mais e mais: $gloria_jesus <br><br>";
        //Incrementando o valor
        $gloria_jesus++;
    }
    echo"<hr>";

    $para=0;
    $teste = 10;


    while($para<$teste){

        echo "Numeros intermediarios são:" .$para. "<br><br>";
        ++$para;
        
        
    }

    //Do While
    echo "<hr><h2>Usando Do While</h2>";

    $p = 90;


    do{
        echo "Email enviado: $p <br>";
        $p++;
        if($p<=99){
            echo "Número inválido. ";
            break;
        };
    }while($p<=102);

    echo"<hr><h2>Usando FOR</h2>";
    //for (<inicialização>;<condição>;<incremento ou decremento>);

    //função date traz a data atual
    $today = date("d/m/Y H:i ");
    for($email_enviados = 1; $email_enviados <= 10; $email_enviados++){
        echo "Email enviado as: " .$today." quantidade de email enviado: ".$email_enviados. "<br>";
    }

    //Empresa B 
    echo"<br><h2> Carteirinhas </h2>";

    $numero_carteirinhas = 56898;



    for($carteirinhas = 1; $carteirinhas <=25; $carteirinhas++){
        echo "O número da carteirinha é: " .$numero_carteirinhas++. " Total de carteirinhas é de: $carteirinhas <br><br>";
        
    }


    //Usando foreach
    echo"<hr><h2>Usando foreach </h2>";

    // a palavra as é uma palavra reservada
    $notas_do_filme = [9,8,5,7,8,9,10,9,10,8,7,10,9];

    $qtd  = array_sum($notas_do_filme); //quantos filmes tiveram notas
    var_dump($qtd);
    // a palavra as é uma palavra reservada
    foreach ($notas_do_filme as $notas_do_filme){
        $nota_empresa_b = $notas_do_filme / $qtd;
        var_dump($nota_empresa_b);
        // para saber a media, deve somar todos os valores e dividir pela quantidade de itens que foram avaliados
        echo"Nota do filme:" .$notas_do_filme. " Média " .round($nota_empresa_b,2). "<br><br>";

    }

    

    echo "<br>";
    $opiniao_pessoas = ["s","s","s","n","s","n","n","s","s","s","s","n","s","s","n","s","s","s","s"];
    var_dump($opiniao_pessoas); 

    $opcao_contar = array_count_values(array_map("strtolower", $opiniao_pessoas)); 
    $opcao_sim = $opcao_contar["s"];
    var_dump($opcao_contar);
    $opcao_nao = $opcao_contar["n"];
    var_dump($opcao_sim);
    var_dump($opcao_nao);

    echo "Número de pessoas que respondeu Sim: $opcao_sim <br><br>";
    echo "Número de pessoas que respondeu Não: $opcao_nao";
    echo "Número de pessoas que respondeu Não: $opcao_nao";
    



    ?>

