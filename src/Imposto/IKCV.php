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

    public function verificarCondicaoParaTaxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->confirmarValorDoItem($orcamento->getItens());
    }

    public function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}