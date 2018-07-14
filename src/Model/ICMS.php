<?php

namespace DesignPatterns\Model;

class ICMS implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}