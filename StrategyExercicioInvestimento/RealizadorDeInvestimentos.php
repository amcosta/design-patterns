<?php

class RealizadorDeInvestimentos
{
    public function calcular(Conta $conta, InvestimentoInterface $investimento)
    {
        $chance = $this->sortear();
        $valor = $investimento->calcular($conta, $chance);
        $conta->deposita($valor);

        return $conta->getSaldo();
    }

    private function sortear()
    {
        return mt_rand(0, 100);
    }
}