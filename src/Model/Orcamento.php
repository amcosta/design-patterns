<?php

namespace DesignPatterns\Model;

class Orcamento
{
    private $valor;

    /**
     * @var array
     */
    private $itens = [];

    public function __construct($valor = null)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return array_reduce($this->itens, function($total, OrcamentoItem $item) {
            $total += $item->getValor();
            return $total;
        }, 0);
    }

    public function addItem(OrcamentoItem $item)
    {
        $this->itens[] = $item;
    }

    public function getItens()
    {
        return $this->itens;
    }
}