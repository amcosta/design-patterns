<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/05/18
 * Time: 19:13
 */

namespace DesignPatterns\Tests\Descontos;

use DesignPatterns\ChainOfResponsibility\Descontos\DescontoPorVendaCasada;
use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;
use PHPUnit\Framework\TestCase;

class DescontoPorVendaCasadaTest extends TestCase
{
    public function testDescontoDe5Porcento()
    {
        $lapis = new OrcamentoItem('Lapis', '5');
        $caneta = new OrcamentoItem('Caneta', '10');

        $orcamento = new Orcamento();
        $orcamento->addItem($lapis);
        $orcamento->addItem($caneta);

        $desconto = new DescontoPorVendaCasada();
        $valorDoDesconto = $desconto->obterDesconto($orcamento);

        $this->assertEquals('0.75', $valorDoDesconto);
    }
}