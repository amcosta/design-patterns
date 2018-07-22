<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

abstract class Imposto implements ImpostoInterface
{
    /**
     * @var ImpostoInterface
     */
    private $imposto;

    public function __construct(ImpostoInterface $imposto = null)
    {
        $this->imposto = $imposto;
    }

    abstract public function calcular(Orcamento $orcamento);

    final protected function calcularOutroImposto(Orcamento $orcamento)
    {
        return is_null($this->imposto) ? 0 : $this->imposto->calcular($orcamento);
    }
}