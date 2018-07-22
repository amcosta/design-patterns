<?php

namespace DesignPatterns\Filtro;

interface ContaInterface
{
    public function getSaldo();

    public function getDataDeAbertura(): \DateTime;
}