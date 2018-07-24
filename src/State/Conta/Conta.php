<?php

namespace DesignPatterns\State\Conta;

class Conta
{
    /**
     * @var ContaInterface
     */
    private $estado;

    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function sacar($valor)
    {

    }

    public function depositar($valor)
    {

    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}