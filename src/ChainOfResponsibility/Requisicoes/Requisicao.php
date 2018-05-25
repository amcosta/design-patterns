<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/05/18
 * Time: 19:55
 */

namespace DesignPatterns\ChainOfResponsibility\Requisicoes;


class Requisicao
{
    private $formato;

    public function __construct($formato)
    {
        $this->formato = $formato;
    }

    public function getFormato()
    {
        return $this->formato;
    }
}