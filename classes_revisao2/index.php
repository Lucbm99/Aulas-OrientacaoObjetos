<?php 

class Animais {
    public $nome;
    public $classe;
    public $patas;

    public function __construct($nome, $classe, $patas) {
        $this->nome = $nome;
        $this->classe = $classe;
        $this->patas = $patas;
    }

    public function getNomeAnimal($nameAnimal) {
        $this->nome = $nameAnimal;
    }

    public function setNomeAnimal() {
        return $this->nome;
    }

    public function getClasseAnimal($classAnimal) {
        $this->classe = $classAnimal;
    }

    public function setClasseAnimal() {
        return $this->classe;
    }

    public function setQuantidadePatas($patasAnimal) {
        $this->patas = $patasAnimal;
    }

    public function getQuantidadePatas() {
        return $this->patas;
    }

    
}

$animais1 = new Animais("Rinoceronte", "Mamífero", 4);
$animais2 = new Animais("Jacaré", "Reptil", 4);
$animais3 = new Animais("Aranha", "Inseto - aracnídeo", 8);

echo "Animal 1 - Nome: ".$animais1->nome."<br>"."Classe: ".$animais1->classe."<br>"."Quantidade de patas: ".$animais1->patas."<br>";
echo "Animal 2 - Nome: ".$animais2->nome."<br>"."Classe: ".$animais2->classe."<br>"."Quantidade de patas: ".$animais2->patas."<br>";
echo "Animal 3 - Nome: ".$animais3->nome."<br>"."Classe: ".$animais3->classe."<br>"."Quantidade de patas: ".$animais3->patas."<br>";
