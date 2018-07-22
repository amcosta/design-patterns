<?php

namespace DesignPatterns\Tests\Filtro;

use DesignPatterns\Filtro\ContaInterface;
use DesignPatterns\Filtro\ContasDoMesAtual;
use DesignPatterns\Filtro\SaldoAbaixoDe100;
use DesignPatterns\Filtro\SaldoAcimaDe500K;
use PHPUnit\Framework\TestCase;

class ContasDoMesAtualTest extends TestCase
{
    public function testFiltrarContas()
    {
        $conta1 = $this->mockConta((new \DateTime('now'))->modify('90 days ago'), null);
        $conta2 = $this->mockConta(new \DateTime('now'), null);
        $conta3 = $this->mockConta((new \DateTime('now'))->modify('+90 days'), null);

        $filtro = new ContasDoMesAtual();

        $contas = $filtro->filtra([$conta1, $conta2, $conta3]);

        $this->assertCount(1, $contas);
    }

    private function mockConta($data, $saldo)
    {
        $mock = $this->getMockBuilder(ContaInterface::class)->getMock();
        $mock->method('getDataDeAbertura')->willReturn($data);
        $mock->method('getSaldo')->willReturn($saldo);

        return $mock;
    }

    public function testCombinarComFiltroSaldoAbaixoDe100Reais()
    {
        $conta1 = $this->mockConta((new \DateTime('now'))->modify('90 days ago'), 50);
        $conta2 = $this->mockConta(new \DateTime('now'), 200);
        $conta3 = $this->mockConta((new \DateTime('now'))->modify('+90 days'), 90);

        $filtro = new ContasDoMesAtual(new SaldoAbaixoDe100());

        $contas = $filtro->filtra([$conta1, $conta2, $conta3]);

        $this->assertCount(0, $contas);
    }

    public function testCombinarComFiltroSaldoAcimaDe500KReais()
    {
        $conta1 = $this->mockConta((new \DateTime('now'))->modify('90 days ago'), 50);
        $conta2 = $this->mockConta(new \DateTime('now'), 2000000);
        $conta3 = $this->mockConta((new \DateTime('now'))->modify('+90 days'), 90);

        $filtro = new ContasDoMesAtual(new SaldoAcimaDe500K());

        $contas = $filtro->filtra([$conta1, $conta2, $conta3]);

        $this->assertCount(1, $contas);
    }
}