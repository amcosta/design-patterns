<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

class ICPP extends ImpostoCondicionalTemplate
{
    public function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() < 500;
    }

    public function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }

    public function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }
}