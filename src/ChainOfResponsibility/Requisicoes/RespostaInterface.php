<?php

namespace DesignPatterns\ChainOfResponsibility\Requisicoes;

interface RespostaInterface
{
    public function responde(Requisicao $requisicao, Conta $conta);
}