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

    abstract protected function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento);

    abstract protected function taxacaoMaxima(Orcamento $orcamento);

    abstract protected function taxacaoMinima(Orcamento $orcamento);
}