<?php

namespace DesignPatterns\State;


use DesignPatterns\Model\Orcamento;

class EmAprovacao implements EstadoInterface
{
    public function aplicarDescontoExtra(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }

    public function aprovar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Aprovado());
    }

    public function reprovar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Reprovado());
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new EstadoException('Nâo é possível finalizar um orçamento em aprovação');
    }
}