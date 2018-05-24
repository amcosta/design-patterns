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
        $descontoVendaCasada = new DescontoPorVendaCasada();

        $descontoVendaCasada->setProximoDesconto($semDesconto);
        $desconto500Reais->setProximoDesconto($descontoVendaCasada);
        $desconto5Itens->setProximoDesconto($desconto500Reais);

        return $desconto5Itens;
    }
}