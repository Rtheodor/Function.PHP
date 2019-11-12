<?php
//in_array
$array = array('mac', 'linux', 'windows');
$retorno = is_array ('mac', $array );

if($retorno){
    echo "Verdadeiro";
}else{
    echo "Falso";
}
?>