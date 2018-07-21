<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class SemDesconto extends DescontoTemplate
{
    public function validarDesconto(Orcamento $orcamento)
    {
        return true;
    }

    public function aplicarDesconto(Orcamento $orcamento)
    {
        return 0;
    }
}