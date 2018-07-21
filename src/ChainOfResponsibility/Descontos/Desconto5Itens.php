<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class Desconto5Itens extends DescontoTemplate
{
    public function validarDesconto(Orcamento $orcamento)
    {
        return count($orcamento->getItens()) >= 5;
    }

    public function aplicarDesconto(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}