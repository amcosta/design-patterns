<?php

namespace DesignPatterns\Tests\Filtro;


use DesignPatterns\Filtro\ContaInterface;
use DesignPatterns\Filtro\SaldoAbaixoDe100;
use PHPUnit\Framework\TestCase;

class SaldoAbaixoDe100Test extends TestCase
{
    public function testFiltrarContas()
    {
        $conta1 = $this->mockConta(50);
        $conta2 = $this->mockConta(200);
        $conta3 = $this->mockConta(300);
        $conta4 = $this->mockConta(80);

        $filtro = new SaldoAbaixoDe100();

        $contas = $filtro->filtra([$conta1, $conta2, $conta3, $conta4]);

        $this->assertCount(2, $contas);
    }

    private function mockConta($saldo)
    {
        $mock = $this->getMockBuilder(ContaInterface::class)->getMock();
        $mock->method('getSaldo')->willReturn($saldo);

        return $mock;
    }
}