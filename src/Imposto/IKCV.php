<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;

class IKCV extends ImpostoCondicionalTemplate
{
    private function confirmarValorDoItem(array $itens)
    {
        /**
         * @var OrcamentoItem $item
         */
        foreach ($itens as $item) {
            if ($item->getValor() >= 100) {
                return true;
            }
        }

        return false;
    }

    protected function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->confirmarValorDoItem($orcamento->getItens());
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}