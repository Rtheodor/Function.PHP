<?php
echo "<hr> <h4>Receber os dados de cada campo individualmente</h4>";
$nome_cliente = filter_input(INPUT_POST, "nome_cliente", FILTER_SANITIZE_STRING);
$email_cliente = filter_input(INPUT_POST,"email_cliente", FILTER_SANITIZE_STRING);
$senha_cliente = filter_input(INPUT_POST,"senha_cliente", FILTER_SANITIZE_STRING);
echo "Nome do cliente: $nome_cliente <br><br>";
echo "E-mail do cliente: $email_cliente <br><br>";
echo "Nome do cliente: $senha_cliente <br><br>";

echo "<hr> <h4>Receber todos os dados de todos os campos com filter_unout_array</h4>";
$dados=filter_input_array(INPUT_POST,FILTER_DEFAULT);
var_dump($dados);

echo "Nome do cliente: ".$dados['nome_cliente'] ."<br><br>";
echo "E-mail do cliente: ".$dados['email_cliente'] ."<br><br>";
echo "Senha do cliente: ".$dados['senha_cliente'] ."<br><br>";

echo "<hr> <h4>Enviando artigo via post ";

$artigo = filter_input(INPUT_POST,"artigo_cliente", FILTER_SANITIZE_STRING);
$area_artigo = filter_input(INPUT_POST,"artigo_cliente", FILTER_SANITIZE_STRING);
echo "Artigo: $artigo <br><br>";
echo $area_artigo;

$infos = filter_input_array(INPUT_POST,FILTER_DEFAULT);
var_dump($infos);
echo "Nome do artigo: ".$infos['artigo_cliente'] ."<br><br>";
echo "Artigo enviado: ".$infos['area_artigo'] ."<br><br>";
