<?php 

interface Operacoes {

    public function listagem();
    public function adicao();
    public function remocao(); 
}

class Animais implements Operacoes {

    public function listagem() {
        echo "Listando animais";
    }

    public function adicao() {
        echo "Adicionando animais";
    }

    public function remocao() {
        echo "Removendo animais";
    }
}

class Frutas implements Operacoes {
    public function listagem() {
        echo "Listando frutas";
    }

    public function adicao() {
        echo "Adicionando frutas";
    }

    public function remocao() {
        echo "Removendo frutas";
    }
}

$frutas = new Frutas();
$frutas->remocao();