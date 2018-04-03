<?php

class Conservador implements InvestimentoInterface
{
    public function calcular(Conta $conta, $chance)
    {
        return $conta->getSaldo() * 0.08;
    }
}