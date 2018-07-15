<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/07/18
 * Time: 20:47
 */

namespace DesignPatterns\Imposto;


use DesignPatterns\Model\Orcamento;

class ICPP implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento)
    {
        $valor = $orcamento->getValor();

        if ($valor < 500) {
            return $valor * 0.05;
        }

        return $valor * 0.07;
    }

}