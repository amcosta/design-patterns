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
        $this->estado->sacar($valor);

        $this->saldo -= $valor;

        $this->trocarEstado();
    }

    public function depositar($valor)
    {
        $this->saldo += $this->estado->depositar($valor);

        $this->trocarEstado();
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    private function trocarEstado()
    {
        $this->estado = $this->saldo > 0 ? new ContaPositiva() : new ContaNegativa();
    }
}