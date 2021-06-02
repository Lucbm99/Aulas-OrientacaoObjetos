<?php 

class Fruta {
    public $nome;
    public $cor;
    public $preco;

}


$fruta1 = new Fruta();
$fruta1->nome = "Banana";
$fruta1->cor = "Amarela";
$fruta1->preco = 2.55;

echo "Fruta 1: ".$fruta1->nome." - Cor: ".$fruta1->cor." - Preço: ".$fruta1->preco;


