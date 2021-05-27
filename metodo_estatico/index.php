<?php

class Matematica {
    
    // public string $nome = 'Lucas';
    
    public static function somar($x, $y) {
        return $x + $y;
    }
}

echo Matematica::somar(20, 30);