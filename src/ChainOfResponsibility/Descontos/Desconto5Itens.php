<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class Desconto5Itens implements DescontoInterface
{
    /**
     * @var DescontoInterface
     */
    private $desconto;

    public function obterDesconto(Orcamento $orcamento)
    {
        $itens = $orcamento->getItens();
        $valor = $orcamento->getValor();

        if (5 === count($itens)) {
            return $valor * 0.1;
        }

        return $this->desconto->obterDesconto($orcamento);
    }

    public function setProximoDesconto(DescontoInterface $desconto)
    {
        $this->desconto = $desconto;
    }
}