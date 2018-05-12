<?php

class Moderado implements InvestimentoInterface
{
    public function calcular(Conta $conta, $chance)
    {
        $taxa = $this->getTaxa($chance);
        return $conta->getSaldo() * $taxa;
    }

    private function getTaxa($chance)
    {
        if ($chance < 50) {
            return 0.025;
        }

        return 0.07;
    }
}