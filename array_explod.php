<?php
//função explode
$string = "12/11/2019";
$retorno = explode("/", $string);
var_export($retorno);

//implode
$nova_string = implode("/", $retorno);
echo $nova_string;

?>