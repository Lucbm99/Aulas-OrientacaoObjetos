<?php 

class Produto {
    public $id;
    public $nome;
    public $preco;
    public $emEstoque;

    public function __construct($post_id) {
        $this->id = $post_id;
        //consultar banco de dados/api para pegar informações do post
        $this->preco = 23;
    }

    //função que aumenta o preço em um produto
    public function aumentarPreco() {
        $this->preco++;
    }

    //função que decrementa o preço de um produto
    public function diminuirProduto() {
        $this->preco--;
    }
}



$produto1 = new Produto(2);
$produto1->nome = "Feijão";
$produto1->preco = 9.11;
$produto1->emEstoque = false;
$produto1->aumentarPreco();

$produto2 = new Produto(4);  
$produto2->nome = "Ameixa";
$produto2->preco = 8.33;
$produto2->emEstoque = true;
$produto2->diminuirProduto();

$produto3 = new Produto ( "Maritaca", 3, "Ave");

echo "O produto: ".$produto1->nome." custa: R$ ".$produto1->preco." e sua situação no estoque é: ".$produto1->emEstoque."<br>";
echo "O produto: ".$produto2->nome." custa: R$ ".$produto2->preco." e sua situação no estoque é: ".$produto2->emEstoque."<br>";