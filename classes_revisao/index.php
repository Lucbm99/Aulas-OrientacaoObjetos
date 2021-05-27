<?php

class Carro {
    public $nome;
    public $marca;
    public $quantidade_portas = 0;
    public $combustivel;

    public function __construct($nome, $marca, $quantidade_portas, $combustivel) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->quantidade_portas = $quantidade_portas;
        $this->combustivel = $combustivel;
    }
}
$carro1 = new Carro("Gol", "Volkswagen", 2, "Gasolina"); 

echo "Carro: ".$carro1->nome."<br>"."Marca: ".$carro1->marca."<br>"."Qtde Portas: ".$carro1->quantidade_portas."<br>"."Combustivel: ".$carro1->combustivel;
