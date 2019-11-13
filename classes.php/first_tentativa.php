<?php
class Carro{
    //Atributos
    var $carro;
    
    //getters e setter
    function setNome($carro_definido){
        $this -> nome = $carro_definido;
    }
   
    function getNome(){
        return $this -> nome;
    }
}
$carro = new carro();
$carro-> setNome('Corvete');
echo $carro -> getNome();

class Cor{
    var $cor;

    function  setNome($cor_definida){
        $this -> nome = $cor_definida;
    }

    function getNome(){
        return $this -> nome;
    }
}
$cor = new Cor();
$cor -> setNome(' vermelha ');
echo $cor -> getNome();


class Tipo{
    //Atributos
    var $tipo;

    //getters e setter
    function setNome($tipo_definido){
        $this -> nome = $tipo_definido;
    }

    function getNome(){
        return $this -> nome;
    }

}

$tipo = new Tipo();
$tipo -> setNome('Semi-esport');
echo $tipo -> getNome();

?>