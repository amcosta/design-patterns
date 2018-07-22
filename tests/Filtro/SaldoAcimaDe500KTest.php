<?php

namespace DesignPatterns\Tests\Filtro;

use DesignPatterns\Filtro\ContaInterface;
use DesignPatterns\Filtro\SaldoAcimaDe500K;
use PHPUnit\Framework\TestCase;

class SaldoAcimaDe500KTest extends TestCase
{
    public function testFiltrarContas()
    {
        $conta1 = $this->mockConta(50000);
        $conta2 = $this->mockConta(200000);
        $conta3 = $this->mockConta(5000000);
        $conta4 = $this->mockConta(80);

        $filtro = new SaldoAcimaDe500K();

        $contas = $filtro->filtra([$conta1, $conta2, $conta3, $conta4]);

        $this->assertCount(1, $contas);
    }

    private function mockConta($saldo)
    {
        $mock = $this->getMockBuilder(ContaInterface::class)->getMock();
        $mock->method('getSaldo')->willReturn($saldo);

        return $mock;
    }
}