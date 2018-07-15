<?php

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

interface ImpostoInterface
{
    public function calcular(Orcamento $orcamento);
}