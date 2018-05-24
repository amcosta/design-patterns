<?php

namespace DesignPatterns\Tests\Descontos;

use DesignPatterns\ChainOfResponsibility\Descontos\Desconto500Reais;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class Desconto500ReaisTest extends TestCase
{
    public function testDesconto5Porcento()
    {
        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getValor')->willReturn(500);

        $desconto = new Desconto500Reais();
        $valorDoDesconto = $desconto->obterDesconto($orcamento);

        $this->assertEquals(35, $valorDoDesconto);
    }
}