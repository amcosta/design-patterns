<?php

namespace DesignPatterns\Relatorio;

class RelatorioSimples extends RelatorioTemplate
{
    private $banco = 'Banco Simples';

    private $telefone = '11 12341234';

    protected function cabecalho()
    {
        return "<p>{$this->banco} - {$this->telefone}</p>";
    }

    protected function conteudo()
    {
        return "<p>Conteúdo do relatório</p>";
    }

    protected function rodape()
    {
        return "<p>{$this->banco} - {$this->telefone}</p>";
    }
}