<?php
class X{
    //Atributos
    var $x;

    //getters e setter
    function setNome($x_definido){
        $this -> nome = $x_definido;
    }

    function getNome(){
        return $this -> nome;
    }
}

$x = new X();
$x -> setNome('XXXXXXXXXXXXXXXXXXXXXXXXXX  ');
echo $x -> getNome();


class Y{
    //Atributos
    var $y;

    //getters e setter
    function setNome($y_definido){
        $this -> nome = $y_definido;
    }

    function getNome(){
        return $this -> nome;
    }
}

$Y = new Y();
$Y -> setNome('YYYYYYYYYYYYYYYYYYYYYYYYY');
echo $Y -> getNome();

?>