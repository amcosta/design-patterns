<?php

class ICCC implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        $valor = $orcamento->getValor();

        list($taxa, $adicional) = $this->getTaxa($valor);

        return ($valor * $taxa) + $adicional;
    }

    private function getTaxa($valor)
    {
        if ($valor < 1000) {
            return [0.05, 0];
        }

        if ($valor > 3000) {
            return [0.08, 30];
        }

        return [0.07, 0];
    }
}