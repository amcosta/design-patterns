<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

class ISS implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}