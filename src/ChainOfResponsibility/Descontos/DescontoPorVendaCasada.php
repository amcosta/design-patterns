<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;

class DescontoPorVendaCasada extends DescontoTemplate
{
    public function validarDesconto(Orcamento $orcamento)
    {
        $temLapis = false;
        $temCaneta = false;

        /* @var OrcamentoItem $item */
        foreach ($orcamento->getItens() as $item) {
            $produtoNome = strtolower($item->getNome());

            if ('lapis' === $produtoNome) {
                $temLapis = true;
            }

            if ('caneta' === $produtoNome) {
                $temCaneta = true;
            }
        }

        return $temLapis && $temCaneta;
    }

    public function aplicarDesconto(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}
