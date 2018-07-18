<?php

namespace DesignPatterns\Tests\Relatorio;

use DesignPatterns\Relatorio\RelatorioInterface;
use DesignPatterns\Relatorio\RelatorioSimples;
use PHPUnit\Framework\TestCase;

class RelatorioSimplesTest extends TestCase
{
    public function testVerificarInterface()
    {
        $this->assertInstanceOf(RelatorioInterface::class, new RelatorioSimples());
    }

    public function testAnalisarRelatorio()
    {
        $relatorio = new RelatorioSimples();

        $conteudo = $relatorio->gerar();

        $this->assertStringStartsWith('<p>Banco Simples - 11 12341234</p><', $conteudo);
    }
}