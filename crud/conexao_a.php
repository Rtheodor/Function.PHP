<?php

//Inicio da conexão com o banco de dados, utilizando PDO

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mansaox";
$port = 3306;

try{
    //CONEXÃO COM A PORTA
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user,$pass);
    
    //CONEXÃO SEM A PORTA
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user,$pass);
    //$conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
    $conn->exec ("set names utf8");
    
    //echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $err){
    echo"Erro: Conexão com banco de dados não foi realizado com sucesso. Erro gerado ".$err->getMessage();
}
//Fim da conexão com o banco de daods PDO

?>