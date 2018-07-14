<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/07/18
 * Time: 13:25
 */

namespace DesignPatterns\Tests\Model;

use DesignPatterns\Model\ICMS;
use DesignPatterns\Model\ImpostoInterface;
use DesignPatterns\Model\Orcamento;
use PHPUnit\Framework\TestCase;

class ICMSTest extends TestCase
{
    public function testVerifyInterface()
    {
        $imposto = new ICMS();

        $this->assertInstanceOf(ImpostoInterface::class, $imposto);
    }

    public function testCalculateTax()
    {
        $imposto = new ICMS();

        $orcamento = $this->getMockBuilder(Orcamento::class)->getMock();
        $orcamento->method('getValor')->willReturn(500);

        $taxa = $imposto->calcular($orcamento);

        $this->assertEquals(25, $taxa);
    }
}