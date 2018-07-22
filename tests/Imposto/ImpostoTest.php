<?php

namespace DesignPatterns\Tests\Imposto;

use DesignPatterns\Imposto\ICMS;
use DesignPatterns\Imposto\ICPP;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class ImpostoTest extends TestCase
{
    public function testDecorator()
    {
        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getValor')->willReturn(1000);

        $imposto = new ICPP(new ICMS());

        $valor = $imposto->calcular($orcamento);

        $this->assertEquals(120, $valor);
    }
}