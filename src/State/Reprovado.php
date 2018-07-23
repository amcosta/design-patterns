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
        throw new EstadoException('Não é possível aprovar uma nova reprovada');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new EstadoException('Não é possível reprovar uma nova reprovada');
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado());
    }
}