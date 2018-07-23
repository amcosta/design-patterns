<?php

namespace DesignPatterns\Tests\State;


use DesignPatterns\Model\Orcamento;
use DesignPatterns\State\Aprovado;
use DesignPatterns\State\EstadoInterface;
use PHPUnit\Framework\TestCase;

class AprovadorTest extends TestCase
{
    public function testVerificarInterface()
    {
        $this->assertInstanceOf(EstadoInterface::class, new Aprovado());
    }

    public function testVerificarDescontoDe2Porcento()
    {
        $orcamento = new Orcamento(500);
        $orcamento->aprovar();
        $orcamento->aplicarDescontoExtra();

        $this->assertEquals(490, $orcamento->getValor());
    }
}