<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/05/18
 * Time: 13:16
 */

namespace DesignPatterns\Tests\Model;


use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;
use PHPUnit\Framework\TestCase;

class OrcamentoTest extends TestCase
{
    public function testGetValor()
    {
        $orcamento = new Orcamento();
        $item1 = new OrcamentoItem('item 1', 150);
        $item2 = new OrcamentoItem('Item 2', 200);

        $orcamento->addItem($item1);
        $orcamento->addItem($item2);

        $this->assertEquals(350, $orcamento->getValor());
    }
}