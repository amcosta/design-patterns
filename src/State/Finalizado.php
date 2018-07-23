<?php

namespace DesignPatterns\State;


use DesignPatterns\Model\Orcamento;

class Finalizado implements EstadoInterface
{
    public function aplicarDescontoExtra(Orcamento $orcamento)
    {
        return 0;
    }

    public function aprovar(Orcamento $orcamento)
    {
        throw new EstadoException('Não é possível aprovar uma nova finalizada');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new EstadoException('Não é possível reprovar uma nova finalizada');
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new EstadoException('Não é possível finalizar uma nova finalizada');
    }

}