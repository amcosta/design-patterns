<?php

class CalculadoraDeImposto
{
    public function calcular(Orcamento $orcamento, ImpostoInterface $imposto)
    {
        return $imposto->calcular($orcamento);
    }
}