<?php

namespace DesignPatterns\Tests\Descontos;

use DesignPatterns\ChainOfResponsibility\Descontos\CalculadoraDeDesconto;
use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;
use PHPUnit\Framework\TestCase;

class CalculadoraDeDescontoTest extends TestCase
{
    public function testSemDesconto()
    {
        $item = $this->createMock(OrcamentoItem::class);
        $item->method('getNome')->willReturn(null);

        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getItens')->willReturn([$item]);
        $orcamento->method('getValor')->willReturn(30);

        $calculadora = new CalculadoraDeDesconto();
        $valor = $calculadora->obterDesconto($orcamento);

        $this->assertEquals(0, $valor);
    }

    public function testDesconto5Itens()
    {
        $itens = [];

        for ($i = 1; $i <= 5; $i++) {
            $item = $this->createMock(OrcamentoItem::class);
            array_push($itens, $item);
        }

        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getItens')->willReturn($itens);
        $orcamento->method('getValor')->willReturn(500);

        $calculadora = new CalculadoraDeDesconto();
        $valor = $calculadora->obterDesconto($orcamento);

        $this->assertEquals(50, $valor);
    }

    public function testDesconto5Porcento()
    {
        $itens = [];

        for ($i = 1; $i <= 2; $i++) {
            $item = $this->createMock(OrcamentoItem::class);
            array_push($itens, $item);
        }

        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getItens')->willReturn($itens);
        $orcamento->method('getValor')->willReturn(1000);

        $calculadora = new CalculadoraDeDesconto();
        $valor = $calculadora->obterDesconto($orcamento);

        $this->assertEquals(70, $valor);
    }
}