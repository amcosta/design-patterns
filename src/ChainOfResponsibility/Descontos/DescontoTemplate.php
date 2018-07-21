<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

abstract class DescontoTemplate implements DescontoInterface
{
    /**
     * @var DescontoInterface
     */
    private $desconto;

    final public function obterDesconto(Orcamento $orcamento)
    {
        if ($this->validarDesconto($orcamento)) {
            return $this->aplicarDesconto($orcamento);
        }

        return $this->desconto->obterDesconto($orcamento);
    }

    public function setProximoDesconto(DescontoInterface $desconto)
    {
        $this->desconto = $desconto;
    }

    abstract public function validarDesconto(Orcamento $orcamento);

    abstract public function aplicarDesconto(Orcamento $orcamento);
}
