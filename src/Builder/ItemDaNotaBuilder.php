<?php

namespace DesignPatterns\Builder;

use DesignPatterns\Model\ItemDaNota;

class ItemDaNotaBuilder
{
    private $nome;
    private $valor;

    public function comNome($nome)
    {
        $this->nome = $nome;
    }

    public function comValor($valor)
    {
        $this->valor = $valor;
    }

    public function gerar()
    {
        return new ItemDaNota($this->nome, $this->valor);
    }
}