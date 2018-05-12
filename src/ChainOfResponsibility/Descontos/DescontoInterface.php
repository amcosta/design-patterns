<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

interface DescontoInterface
{
    public function obterDesconto(Orcamento $orcamento);
    public function setProximoDesconto(DescontoInterface $desconto);
}