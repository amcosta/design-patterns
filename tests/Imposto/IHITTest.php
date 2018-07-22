<?php

namespace DesignPatterns\Tests\Imposto;

use DesignPatterns\Imposto\IHIT;
use DesignPatterns\Imposto\Imposto;
use DesignPatterns\Imposto\ImpostoInterface;
use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;
use PHPUnit\Framework\TestCase;

class IHITTest extends TestCase
{
    public function testVerifyInterface()
    {
        $imposto = new IHIT();

        $this->assertInstanceOf(Imposto::class, $imposto);
    }

    public function testVerifyMaximumCondition()
    {
        $item1 = $this->getMockBuilder(OrcamentoItem::class)->disableOriginalConstructor()->getMock();
        $item1->method('getNome')->willReturn('item');

        $item2 = $this->getMockBuilder(OrcamentoItem::class)->disableOriginalConstructor()->getMock();
        $item2->method('getNome')->willReturn('item');

        $orcamento = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento->method('getItens')->willReturn([$item1, $item2]);
        $orcamento->method('getValor')->willReturn(100);

        $imposto = new IHIT();
        $taxa = $imposto->calcular($orcamento);

        $this->assertEquals(113, $taxa);
    }

    public function testVerifyMinimumCondition()
    {
        $item1 = $this->getMockBuilder(OrcamentoItem::class)->disableOriginalConstructor()->getMock();
        $item1->method('getNome')->willReturn('item 1');

        $item2 = $this->getMockBuilder(OrcamentoItem::class)->disableOriginalConstructor()->getMock();
        $item2->method('getNome')->willReturn('item 2');

        $orcamento = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento->method('getItens')->willReturn([$item1, $item2]);
        $orcamento->method('getValor')->willReturn(100);

        $imposto = new IHIT();
        $taxa = $imposto->calcular($orcamento);

        $this->assertEquals(2, $taxa);
    }
}