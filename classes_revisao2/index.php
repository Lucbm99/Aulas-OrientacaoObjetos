<?php 

class Animais {
    public $nome;
    public $classe;
    public $patas = 0;


    public function aumentarPatas() {
        $this->patas++;
    }
    // public function __construct($nome, $classe, $patas) {
    //     $this->nome = $nome;
    //     $this->classe = $classe;
    //     $this->patas = $patas;
    // }

    // public function getNomeAnimal($nameAnimal) {
    //     $this->nome = $nameAnimal;
    // }

    // public function setNomeAnimal() {
    //     return $this->nome;
    // }

    // public function getClasseAnimal($classAnimal) {
    //     $this->classe = $classAnimal;
    // }

    // public function setClasseAnimal() {
    //     return $this->classe;
    // }

    // public function setQuantidadePatas($patasAnimal) {
    //     $this->patas = $patasAnimal;
    // }

    // public function getQuantidadePatas() {
    //     return $this->patas;
    // }

    
}

$animais1 = new Animais();
$animais1->nome = "Elefante";
$animais1->classe = "Mamifero";
$animais1->aumentarPatas();


$animais2 = new Animais();
$animais2->nome = "Rinoceronte";
$animais2->classe = "Mamifero";

echo "Animal 1: ".$animais1->nome." e sua classe é: ".$animais1->classe." - Quantidade de patas: ".$animais1->patas."<br>";
echo "Animal 2: ".$animais2->nome." e sua classe é: ".$animais2->classe."<br>";
