<?php 
interface Database {
    public function listarProdutos();

    public function adicionarProduto();

    public function alterarProduto();
}


class MysqlDB implements Database {

    public function listarProdutos() {

    }

    public function adicionarProduto(){
        echo "Adicionando com o MySQL";
    }

    public function alterarProduto() {

    }

}

class OracleDB implements Database {
    public function listarProdutos() {

    }

    public function adicionarProduto(){
        echo "Adicionando com oracle";
    }

    public function alterarProduto() {

    }

}

class MongoDB implements Database {
    public function listarProdutos() {

    }
    public function adicionarProduto() {
        echo "Adicionando com MongoDB";
    }
    
    public function alterarProduto() {

    }
}

$db = new MongoDB();
$db->adicionarProduto();