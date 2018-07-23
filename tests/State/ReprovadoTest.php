<?php

namespace DesignPatterns\Tests\State;


use DesignPatterns\Model\Orcamento;
use DesignPatterns\State\EstadoInterface;
use DesignPatterns\State\Reprovado;
use PHPUnit\Framework\TestCase;

class ReprovadoTest extends TestCase
{
    public function testVerificarInterface()
    {
        $this->assertInstanceOf(EstadoInterface::class, new Reprovado());
    }

    public function testVerificarDescontoDe0Reais()
    {
        $orcamento = new Orcamento(500);
        $orcamento->reprovar();
        $orcamento->aplicarDescontoExtra();

        $this->assertEquals(500, $orcamento->getValor());
    }

    /**
     * @dataProvider providerEstadosInvalidos
     * @expectedException \DesignPatterns\State\EstadoException
     * @param $estado
     */
    public function testLancarExceptionParaEstadoInvalidos($estado)
    {
        $orcamento = new Orcamento(500);
        $orcamento->reprovar();
        $orcamento->$estado();
    }

    public function providerEstadosInvalidos()
    {
        return [
            ['aprovar'],
            ['reprovar']
        ];
    }

    /**
     * @expectedException \DesignPatterns\State\EstadoException
     */
    public function testLancarExceptionAoReaplicarDescontoExtra()
    {
        $orcamento = new Orcamento(500);
        $orcamento->reprovar();
        $orcamento->aplicarDescontoExtra();
        $orcamento->aplicarDescontoExtra();
    }
}