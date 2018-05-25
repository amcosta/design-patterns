<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/05/18
 * Time: 21:59
 */

namespace DesignPatterns\ChainOfResponsibility\Requisicoes;


use DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas\CsvResposta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas\PorcentoResposta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas\SemResposta;
use DesignPatterns\ChainOfResponsibility\Requisicoes\Respostas\XmlResposta;

class GerenciadorDaRequisicao
{
    public function responde(Requisicao $requisicao, Conta $conta)
    {
        $servico = $this->construirCorrente();

        return $servico->responde($requisicao, $conta);
    }

    private function construirCorrente()
    {
        return new XmlResposta(new CsvResposta(new PorcentoResposta(new SemResposta())));
    }
}