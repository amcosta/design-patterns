<?php

namespace DesignPatterns\State;


use DesignPatterns\Model\Orcamento;

class Reprovado implements EstadoInterface
{
    public function aplicarDescontoExtra(Orcamento $orcamento)
    {
        return 0;
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