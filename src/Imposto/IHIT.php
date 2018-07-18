<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;

class IHIT extends ImpostoCondicionalTemplate
{
    protected function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento)
    {
        $itens = $orcamento->getItens();

        /**
         * @var OrcamentoItem $item
         */
        foreach ($itens as $item) {
            $nome = $item->getNome();

            $quantidade = array_filter($itens, function (OrcamentoItem $item) use ($nome) {
                return $nome === $item->getNome();
            });

            if (count($quantidade) >= 2) {
                return true;
            }
        }

        return false;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.13 + 100;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return ($orcamento->getValor() * 0.01) * count($orcamento->getItens());
    }
}