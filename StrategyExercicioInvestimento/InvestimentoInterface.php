<?php

interface InvestimentoInterface
{
    public function calcular(Conta $conta, $chance);
}