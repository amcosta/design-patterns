<?php

namespace DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas;

use DesignPatterns\ChainOfResponsibility\Requisicoes\Conta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Formato;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Requisicao;
use DesignPatterns\ChainOfResponsibility\Requisicoes\RespostaInterface;

class XmlResposta implements RespostaInterface
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
        if ($requisicao->getFormato() != Formato::$XML) {
            return $this->resposta->responde($requisicao, $conta);
        }

        $xml = new \SimpleXMLElement('<xml/>');
        $registro = $xml->addChild('conta');
        $registro->addChild('titular', $conta->titular);
        $registro->addChild('saldo', $conta->saldo);

        return $xml->asXML();
    }
}