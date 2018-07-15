<?php

namespace DesignPatterns\Tests\Model;

use DesignPatterns\Imposto\IKCV;
use DesignPatterns\Imposto\ImpostoInterface;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class IKCVTest extends TestCase
{
    public function testVerifyInterface()
    {
        $imposto = new IKCV();

        $this->assertInstanceOf(ImpostoInterface::class, $imposto);
    }

    public function testCalculateTax()
    {
        $imposto = new IKCV();

        $item1 = $this->getMockBuilder(Orcamento::class)->getMock();
        $item1->method('getValor')->willReturn(50);

        $item2 = $this->getMockBuilder(Orcamento::class)->getMock();
        $item2->method('getValor')->willReturn(150);

        $orcamento = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento->method('getValor')->willReturn(600);
        $orcamento->method('getItens')->willReturn([$item1, $item2]);

        $taxa = $imposto->calcular($orcamento);

        $this->assertEquals(60, $taxa);

        $orcamento2 = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento2->method('getValor')->willReturn(400);

        $taxa = $imposto->calcular($orcamento2);

        $this->assertEquals(24, $taxa);
    }
}