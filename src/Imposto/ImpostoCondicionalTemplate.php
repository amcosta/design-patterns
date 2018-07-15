<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

abstract class ImpostoCondicionalTemplate implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        if ($this->verificarCondicaoParaTaxacaoMaxima($orcamento)) {
            return $this->taxacaoMaxima($orcamento);
        }

        return $this->taxacaoMinima($orcamento);
    }

    abstract public function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento);

    abstract public function taxacaoMaxima(Orcamento $orcamento);

    abstract public function taxacaoMinima(Orcamento $orcamento);
}