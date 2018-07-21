<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/05/18
 * Time: 14:46
 */

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class Desconto500Reais extends DescontoTemplate
{
    public function validarDesconto(Orcamento $orcamento)
    {
        return $orcamento->getValor() >= 500;
    }

    public function aplicarDesconto(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }
}
