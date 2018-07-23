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

}