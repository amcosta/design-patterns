<?php

namespace DesignPatterns\Tests\Descontos;

use DesignPatterns\ChainOfResponsibility\Descontos\Desconto5Itens;
use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;
use PHPUnit\Framework\TestCase;

class Desconto5ItensTest extends TestCase
{
    public function testObterDescontoDe10Porcento()
    {
        $itens = [];
        for ($index = 0; $index < 5; $index++) {
            $itemMock = $this->createMock(OrcamentoItem::class);
            array_push($itens, $itemMock);
        }

        $orcamento = $this->createMock(Orcamento::class);
        $orcamento->method('getItens')->willReturn($itens);
        $orcamento->method('getValor')->willReturn(100);

        $desconto = new Desconto5Itens();
        $valorDoDesconto = $desconto->obterDesconto($orcamento);

        $this->assertEquals(10, $valorDoDesconto);
    }
}