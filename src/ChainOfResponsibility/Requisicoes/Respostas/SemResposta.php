<?php

namespace DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas;

use DesignPatterns\ChainOfResponsibility\Requisicoes\Conta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Formato;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Requisicao;
use DesignPatterns\ChainOfResponsibility\Requisicoes\RespostaInterface;

class SemResposta implements RespostaInterface
{
    /**
     * @var RespostaInterface
     */
    private $resposta;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        return null;
    }

    public function setProxima(RespostaInterface $resposta)
    {
        $this->resposta = $resposta;
    }

}