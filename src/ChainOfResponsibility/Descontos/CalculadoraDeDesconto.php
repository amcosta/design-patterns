<?php

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class CalculadoraDeDesconto
{
    public function obterDesconto(Orcamento $orcamento)
    {
        $descontos = $this->construirDescontos();

        return $descontos->obterDesconto($orcamento);
    }

    private function construirDescontos()
    {
        $semDesconto = new SemDesconto();
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();

        $desconto500Reais->setProximoDesconto($semDesconto);
        $desconto5Itens->setProximoDesconto($desconto500Reais);

        return $desconto5Itens;
    }
}