<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/07/18
 * Time: 13:25
 */

namespace DesignPatterns\Tests\Model;

use DesignPatterns\Imposto\ImpostoInterface;
use DesignPatterns\Imposto\ISS;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class ISSTest extends TestCase
{
    public function testVerifyInterface()
    {
        $imposto = new ISS();

        $this->assertInstanceOf(ImpostoInterface::class, $imposto);
    }

    public function testCalculateTax()
    {
        $imposto = new ISS();

        $orcamento = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento->method('getValor')->willReturn(500);

        $taxa = $imposto->calcular($orcamento);

        $this->assertEquals(30, $taxa);
    }
}