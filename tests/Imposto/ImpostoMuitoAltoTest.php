<?php

namespace DesignPatterns\Tests\Imposto;

use DesignPatterns\Imposto\ICPP;
use DesignPatterns\Imposto\ImpostoMuitoAlto;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class ImpostoMuitoAltoTest extends TestCase
{
    public function testCalculoDoImposto()
    {
        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getValor')->willReturn(1000);

        $imposto = new ImpostoMuitoAlto(new ICPP());

        $valor = $imposto->calcular($orcamento);

        $this->assertEquals(270, $valor);
    }
}