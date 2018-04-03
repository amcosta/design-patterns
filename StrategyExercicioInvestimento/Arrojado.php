<?php

class Arrojado implements InvestimentoInterface
{
    public function calcular(Conta $conta, $chance)
    {
        $taxa = $this->getTaxa($chance);
        return $conta->getSaldo() * $taxa;
    }

    private function getTaxa($chance)
    {
        if ($chance < 20) {
            return 0.05;
        }

        if ($chance > 50) {
            return 0.06;
        }

        return 0.03;
    }
}