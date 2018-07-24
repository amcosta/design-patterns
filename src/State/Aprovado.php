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
        throw new EstadoException('Não é possível aprovar uma nota já aprovada');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new EstadoException('Não é possível reprovar uma nota já aprovada');
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado());
    }
}