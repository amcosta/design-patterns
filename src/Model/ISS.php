<?php

namespace DesignPatterns\Model;

class ISS implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}