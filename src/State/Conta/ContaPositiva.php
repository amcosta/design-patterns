<?php
/**
 * Created by PhpStorm.
 * User: amcosta
 * Date: 23/07/18
 * Time: 11:31
 */

namespace DesignPatterns\State\Conta;


class ContaPositiva implements ContaInterface
{
    public function sacar($valor)
    {
        return $valor;
    }

    public function depositar(Conta $conta, $valor)
    {
        return $conta->getSaldo() * 0.98;
    }
}