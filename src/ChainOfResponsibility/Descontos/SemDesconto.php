<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class SemDesconto implements DescontoInterface
{
    public function obterDesconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximoDesconto(DescontoInterface $desconto)
    {
        // Não tem próximo desconto
    }
}