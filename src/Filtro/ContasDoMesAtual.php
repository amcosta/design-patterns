<?php

namespace DesignPatterns\Filtro;

class ContasDoMesAtual extends Filtro
{
    public function filtra(array $contas)
    {
        $mesAtual = (new \DateTime('now'))->format('m');

        $contasFiltradas = array_filter($contas, function (ContaInterface $conta) use ($mesAtual) {
            $mes = $conta->getDataDeAbertura()->format('m');

            return $mes === $mesAtual;
        });

        return $this->aplicarDemaisFiltros($contasFiltradas);
    }
}