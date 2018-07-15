<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

class ICMS implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}