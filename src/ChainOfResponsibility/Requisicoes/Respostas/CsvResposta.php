<?php

namespace DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas;

use DesignPatterns\ChainOfResponsibility\Requisicoes\Conta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Formato;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Requisicao;
use DesignPatterns\ChainOfResponsibility\Requisicoes\RespostaInterface;

class CsvResposta implements RespostaInterface
{
    /**
     * @var RespostaInterface
     */
    private $resposta;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() != Formato::$CSV) {
            return $this->resposta->responde($requisicao, $conta);
        }

        $string = 'Titular,Saldo' . PHP_EOL;
        $string .= $conta->titular . ',' . $conta->saldo . PHP_EOL;

        return $string;
    }

    public function setProxima(RespostaInterface $resposta)
    {
        $this->resposta = $resposta;
    }

}