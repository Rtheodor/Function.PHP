<?php
class Veiculo{
    /*Public
    Private
    Protected
    */

    private $placa;
    private $cor;
    protected $tipo = 'Caminhonete';

    public function setPlaca($parametro_placa){
        //VAlidação da placa
        $this->placa = $parametro_placa;
    }

    public function getPlaca(){
        return $this->placa;
    }
}

class Carro extends Veiculo{
    public function exibirTipo(){
        echo $this->tipo;
    }

}


$carro = new Carro();
$carro->exibirTipo();
?>