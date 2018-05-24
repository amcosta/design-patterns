<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/05/18
 * Time: 14:46
 */

namespace DesignPatterns\ChainOfResponsibility\Descontos;

use DesignPatterns\Model\Orcamento;

class Desconto500Reais implements DescontoInterface
{
    /**
     * @var DescontoInterface
     */
    private $desconto;

    public function obterDesconto(Orcamento $orcamento)
    {
        $valor = $orcamento->getValor();

        if ($valor >= 500) {
            return $valor * 0.07;
        }

        return $this->desconto->obterDesconto($orcamento);
    }

    public function setProximoDesconto(DescontoInterface $desconto)
    {
        $this->desconto = $desconto;
    }
}