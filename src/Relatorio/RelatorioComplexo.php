<?php

namespace DesignPatterns\Relatorio;

class RelatorioComplexo extends RelatorioTemplate
{
    private $banco = 'Banco Complexo';

    private $telefone = '11 12341234';

    private $endereco = 'Rua complexa, N 123 - São Paulo - SP';

    protected function cabecalho()
    {
        return "<p>{$this->banco} - {$this->telefone} - {$this->endereco}</p>";
    }

    protected function conteudo()
    {
        return "<p>Conteúdo do relatório</p>";
    }

    protected function rodape()
    {
        return "<p>{$this->banco} - {$this->telefone} - {$this->endereco}</p>";
    }
}