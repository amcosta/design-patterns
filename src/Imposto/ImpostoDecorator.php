<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21/07/18
 * Time: 20:49
 */

namespace DesignPatterns\Imposto;

use DesignPatterns\Model\Orcamento;

class ImpostoDecorator
{
    private $impostos;

    public function adicionarImposto(ImpostoInterface $imposto)
    {
        $this->impostos[] = $imposto;
    }

    public function calcular(Orcamento $orcamento)
    {
        return array_reduce($this->impostos, function ($total, ImpostoInterface $imposto) use ($orcamento) {
            return $total += $imposto->calcular($orcamento);
        }, 0);
    }
}