<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

abstract class ImpostoCondicionalTemplate extends Imposto
{
    final public function calcular(Orcamento $orcamento)
    {
        if ($this->verificarCondicaoParaTaxacaoMaxima($orcamento)) {
            return $this->taxacaoMaxima($orcamento) + $this->calcularOutroImposto($orcamento);
        }

        return $this->taxacaoMinima($orcamento) + $this->calcularOutroImposto($orcamento);
    }

    abstract protected function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento);

    abstract protected function taxacaoMaxima(Orcamento $orcamento);

    abstract protected function taxacaoMinima(Orcamento $orcamento);
}