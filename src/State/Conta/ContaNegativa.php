<?php

namespace DesignPatterns\State\Conta;


class ContaNegativa implements ContaInterface
{
    public function sacar($valor)
    {
        throw new \Exception('Não é possível sacar de uma conta negativa');
    }

    public function depositar(Conta $conta, $valor)
    {
        return $conta->getSaldo() * 0.95;
    }
}