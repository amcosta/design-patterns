<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/07/18
 * Time: 20:52
 */

namespace DesignPatterns\Imposto;


use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;

class IKCV implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        $valor = $orcamento->getValor();

        if ($valor > 500 && $this->confirmarValorDoItem($orcamento->getItens())) {
            return $valor * 0.1;
        }

        return $valor * 0.06;
    }

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
}