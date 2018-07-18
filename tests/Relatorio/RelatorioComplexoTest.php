<?php

namespace DesignPatterns\Tests\Relatorio;

use DesignPatterns\Relatorio\RelatorioComplexo;
use DesignPatterns\Relatorio\RelatorioInterface;
use PHPUnit\Framework\TestCase;

class RelatorioComplexoTest extends TestCase
{
    public function testVerificarInterface()
    {
        $this->assertInstanceOf(RelatorioInterface::class, new RelatorioComplexo());
    }

    public function testAnalisarRelatorio()
    {
        $relatorio = new RelatorioComplexo();

        $conteudo = $relatorio->gerar();

        $this->assertStringStartsWith('<p>Banco Complexo - 11 12341234 - Rua complexa, N 123 - São Paulo - SP</p><', $conteudo);
    }
}