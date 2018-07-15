<?php

namespace DesignPatterns\Tests\Imposto;

use DesignPatterns\Imposto\ICPP;
use DesignPatterns\Imposto\ImpostoInterface;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class ICPPTest extends TestCase
{
    public function testVerifyInterface()
    {
        $imposto = new ICPP();

        $this->assertInstanceOf(ImpostoInterface::class, $imposto);
    }

    /**
     * @dataProvider taxProvider
     * @param $value
     * @param $expected
     */
    public function testCalculateTax($value, $expected)
    {
        $imposto = new ICPP();

        $orcamento = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento->method('getValor')->willReturn($value);

        $taxa = $imposto->calcular($orcamento);

        $this->assertEquals($expected, $taxa);
    }

    public function taxProvider()
    {
        return [
            [100, 5],
            [500, 35]
        ];
    }
}