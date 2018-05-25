<?php

namespace DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas;

use DesignPatterns\ChainOfResponsibility\Requisicoes\Conta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Formato;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Requisicao;
use DesignPatterns\ChainOfResponsibility\Requisicoes\RespostaInterface;

class PorcentoResposta implements RespostaInterface
{
    /**
     * @var RespostaInterface
     */
    private $resposta;

    public function __construct(RespostaInterface $resposta)
    {
        $this->resposta = $resposta;
    }

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() != Formato::$PORCENTO) {
            return $this->resposta->responde($requisicao, $conta);
        }

        $string = 'Titular%Saldo' . PHP_EOL;
        $string .= $conta->titular . '%' . $conta->saldo . PHP_EOL;

        return $string;
    }
}