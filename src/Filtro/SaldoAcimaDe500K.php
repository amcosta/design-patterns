<?php

namespace DesignPatterns\Filtro;

class SaldoAcimaDe500K extends Filtro
{
    public function filtra(array $contas)
    {
        $contasFiltradas = array_filter($contas, function (ContaInterface $conta) {
            return $conta->getSaldo() >= 500000;
        });

        return $this->aplicarDemaisFiltros($contasFiltradas);
    }
}