<?php

namespace DesignPatterns\Tests\State;


use DesignPatterns\Model\Orcamento;
use DesignPatterns\State\EmAprovacao;
use DesignPatterns\State\EstadoInterface;
use PHPUnit\Framework\TestCase;

class EmAprovacaoTest extends TestCase
{
    public function testVerificarInterface()
    {
        $this->assertInstanceOf(EstadoInterface::class, new EmAprovacao());
    }

    public function testAplicarDesconto5Porcento()
    {
        $orcamento = new Orcamento(500);
        $orcamento->aplicarDescontoExtra();

        $this->assertEquals(475, $orcamento->getValor());
    }

    public function testAprovarOrcamento()
    {
        $orcamento = new Orcamento(500);
        $orcamento->aprovar();
        $orcamento->aplicarDescontoExtra();

        $this->assertEquals(490, $orcamento->getValor());
    }

    public function testReprovarOrcamento()
    {
        $orcamento = new Orcamento(500);
        $orcamento->reprovar();
        $orcamento->aplicarDescontoExtra();

        $this->assertEquals(500, $orcamento->getValor());
    }

    /**
     * @expectedException \DesignPatterns\State\EstadoException
     */
    public function testLancarExceptionAoMudarParaFinalizado()
    {
        $orcamento = new Orcamento(500);
        $orcamento->finalizar();
    }

    /**
     * @expectedException \DesignPatterns\State\EstadoException
     */
    public function testLancarExceptionAoReaplicarDescontoExtra()
    {
        $orcamento = new Orcamento(500);
        $orcamento->aplicarDescontoExtra();
        $orcamento->aplicarDescontoExtra();
    }
}