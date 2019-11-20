<?php

Class Pessoa{
    private $nome;
    public function correr(){
        echo $this->nome . "correndo<br>";
    }
    function __construct($parametro_nome){
        echo "Construtor iniciado";
        $this->nome = $parametro_nome;
        echo $this->nome;
    }
    function __destruct(){
        echo "Objeto removido<br>";
    }
}
$pessoa = new Pessoa();
$pessoa->correr();
?>