<?php

interface MatematicaBasica {
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica {
    public function somar($x, $y) {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica {
    public function somar($x, $y) {
        $res = $x;
        for($q = 0; $q < $y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Basico3 implements MatematicaBasica {
    public function somar($x, $y) {
        return 100;
    }
}


class Matematica {
    private $basico;


    public function __construct(MatematicaBasica $b) {
        //utiliza basico1 ou basico2 para a operação
        $this->basico = $b;
    
    }

    public function somar($x, $y) {
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica(new Basico3());
echo $mat->somar(10, 15);



//manipulação de banco de dados
// class Database {
//     private $engine;

//     public function __construct(DatabaseInterface $eng) {
//         $this->engine = $eng;
//     }

//     public function listarTudo() {
//         return $this->engine->listar();
//     }
// }

// class MysqlEngine implements DatabaseInterface {
//     public function listar() {
//         //...
//     }
// }

// $db = new Database( new MysqlEngine() );
// $db->listarTudo();