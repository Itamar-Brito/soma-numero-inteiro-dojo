<?php

namespace Dojo\Tests;

use Dojo\CaculaSomaDeNumerosInteirosService;
use PHPUnit\Framework\TestCase;

class SomaNumerosDeUmInteiroTest extends TestCase
{

     /**
     * @dataProvider providerInteirosEResultados
     */
    public function testAssert($numero,$resultado)
    {
        $class = new CaculaSomaDeNumerosInteirosService;

        $resultadoCalculo = $class->calculaResultado($numero);

        $this->assertEquals($resultado , $resultadoCalculo);
    }

    public function providerInteirosEResultados()
    {
        return [
            [345, 12],   
            [777, 21],  
            [1987,25],
            [995, 23],
            [23,5],
            [0000000001, 1],
            [-1000, 1],
            ['pipoca','Erro, dado inválido!']
        ];
    }
}
