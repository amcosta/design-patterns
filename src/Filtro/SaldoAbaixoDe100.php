<?php

namespace DesignPatterns\Filtro;

class SaldoAbaixoDe100 extends Filtro
{
    public function filtra(array $contas)
    {
        $contasFiltradas = array_filter($contas, function (ContaInterface $conta) {
            return $conta->getSaldo() <= 100;
        });

        return $this->aplicarDemaisFiltros($contasFiltradas);
    }
}