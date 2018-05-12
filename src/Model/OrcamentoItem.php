<?php

namespace DesignPatterns\Model;

class OrcamentoItem
{
    public $nome;
    public $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }
}