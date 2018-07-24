<?php

namespace DesignPatterns\State\Conta;


interface ContaInterface
{
    public function sacar($valor);
    public function depositar($valor);
}