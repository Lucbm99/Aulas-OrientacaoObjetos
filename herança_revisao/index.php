<?php

class MeiosTransporte {
    public $nome;
    public $tipo;
    public $combustivel;


    
    public function setNome($n) {
        $this->$nome = $n;
    }
    public function getNome() {
        return $this->nome;
    }


    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function setCombustivel($c) {
        $this->combustivel = $c;
    }

    public function getCombustivel() {
        return $this->combustivel;
    }
}

class Carro extends MeiosTransporte {
    public $quantidade_portas;


    public function setQuantidadePortas($qt) {
        return $this->quantidade_portas = $qt;
    }

    public function getQuantidadePortas() {
        $this->quantidade_portas;
    }
}

$carro1 = new Carro();  
$carro1->setQuantidadePortas(4);
echo 'A quantidade de portas do carro será: '.$carro1->getQuantidadePortas();