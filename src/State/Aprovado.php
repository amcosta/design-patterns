<?php

namespace DesignPatterns\State;


use DesignPatterns\Model\Orcamento;

class Aprovado implements EstadoInterface
{
    public function aplicarDescontoExtra(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.02;
    }

    public function aprovar(Orcamento $orcamento)
    {
        // TODO: Implement aprovar() method.
    }

    public function reprovar(Orcamento $orcamento)
    {
        // TODO: Implement reprovar() method.
    }

    public function finalizar(Orcamento $orcamento)
    {
        // TODO: Implement finalizar() method.
    }
}