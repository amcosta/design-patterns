<?php

namespace DesignPatterns\Model;

interface ImpostoInterface
{
    public function calcular(Orcamento $orcamento);
}