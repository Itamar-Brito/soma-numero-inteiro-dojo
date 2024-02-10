<?php

namespace Dojo;

use function PHPUnit\Framework\isNan;

class CaculaSomaDeNumerosInteirosService
{  
    public function calculaResultado($numero)
    {
        if ( gettype($numero) != 'integer' ) {
            return 'Erro, dado inválido!';
        }

        $numerosSeparados =  str_split(abs($numero));
        
        $resultado = 0;

        foreach ($numerosSeparados as $numero)  {
            $resultado += $numero;
        }

        return $resultado;
    }

}
