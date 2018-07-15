<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

class ICPP extends ImpostoCondicionalTemplate
{
    protected function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() < 500;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }
}