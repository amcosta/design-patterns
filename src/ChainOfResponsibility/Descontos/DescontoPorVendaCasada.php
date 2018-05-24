<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/05/18
 * Time: 19:12
 */

namespace DesignPatterns\ChainOfResponsibility\Descontos;


use DesignPatterns\Model\Orcamento;
use DesignPatterns\Model\OrcamentoItem;

class DescontoPorVendaCasada implements DescontoInterface
{
    /**
     * @var DescontoInterface
     */
    private $desconto;

    public function obterDesconto(Orcamento $orcamento)
    {
        $temLapis = false;
        $temCaneta = false;

        /* @var OrcamentoItem $item */
        foreach ($orcamento->getItens() as $item) {
            $produtoNome = strtolower($item->getNome());

            if ('lapis' === $produtoNome) {
                $temLapis = true;
            }

            if ('caneta' === $produtoNome) {
                $temCaneta = true;
            }
        }

        if ($temLapis && $temCaneta) {
            return $orcamento->getValor() * 0.05;
        }

        return $this->desconto->obterDesconto($orcamento);
    }

    public function setProximoDesconto(DescontoInterface $desconto)
    {
        $this->desconto = $desconto;
    }
}