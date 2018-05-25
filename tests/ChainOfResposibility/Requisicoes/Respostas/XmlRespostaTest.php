<?php

namespace DesignPatterns\Tests\ChainOfResposibility\Requisicoes\Respostas;

use DesignPatterns\ChainOfResponsibility\Requisicoes\Conta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Formato;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Requisicao;
use DesignPatterns\ChainOfResponsibility\Requisicoes\RespostaInterface;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas\XmlResposta;
use PHPUnit\Framework\TestCase;

class XmlRespostaTest extends TestCase
{
    public function testRequisicaoBemSucedida()
    {
        $requisicao = new Requisicao(Formato::$XML);

        $conta = new Conta();
        $conta->titular = 'Fulano de tal';
        $conta->saldo = 100.50;

        $servico = new XmlResposta($this->createMock(RespostaInterface::class));
        $resposta = $servico->responde($requisicao, $conta);

        $xml = '<?xml version="1.0"?><xml><conta><titular>Fulano de tal</titular><saldo>100.5</saldo></conta></xml>';
        $expected = new \SimpleXMLElement($xml);
        $this->assertEquals($expected->asXML(), $resposta);
    }
}