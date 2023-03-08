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
    echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $err){
    echo"Erro: Conexão com banco de dados não foi realizado com sucesso. Erro gerado ".$err->getMessage();
}

//Fim da conexão com o banco de daods PDO
echo "<h2>Listar Alunos</h2>";

//A query com "*" indica que deve trazer todas com as colunas
$query_usuarios = "SELECT * FROM usuarios";
$result_usuarios = $conn ->prepare($query_usuarios);
$result_usuarios->execute();

while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuario);
    echo "ID:".$row_usuario['id']."<br>";
    echo "Nome:".$row_usuario['nome']."<br>";
    echo "E-mail:".$row_usuario['email']."<br>";
    echo "Senha:".$row_usuario['senha']."<br>";
    echo "Created:". date('d/m/Y H:i:s' , strtotime($row_usuario['created']))."<br>";
    
    
    echo "Modified:";
    if(!empty($row_usuario['modified'])){
       echo  date('d/m/Y H:i:s', strtotime($row_usuario['modified']));
    }
    
    echo "<br>";
    echo"<hr>";
}

echo "<h2>Listar Alunos otimizado</h2>";
//Exemplo de query indicando quais colunas deve retornar valor
$query_usuarios_b = "SELECT id, nome, email, senha, created, modified FROM usuarios";
$result_usuarios_b = $conn ->prepare($query_usuarios_b);
$result_usuarios_b->execute();

while($row_usuario_b=$result_usuarios_b->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_usuario_b);
    extract($row_usuario_b);
    echo "ID: $id <br>";
    echo " Nome $nome <br>";
    echo "E-mail $email <br>";
    
    echo "Created:". date('d/m/Y H:i:s' , strtotime ($created))."<br>";
       
    echo "Modified:";
    if(!empty($modified)){
       echo  date('d/m/Y H:i:s', strtotime($modified));
    }

    echo"<br>";
    echo"<hr>";
}

?>