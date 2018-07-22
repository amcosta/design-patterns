<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

class ImpostoMuitoAlto extends ImpostoCondicionalTemplate
{
    protected function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 0;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.2;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.2;
    }
}
