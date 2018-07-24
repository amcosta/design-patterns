<?php

namespace DesignPatterns\Model;

use DesignPatterns\State\EmAprovacao;
use DesignPatterns\State\EstadoException;
use DesignPatterns\State\EstadoInterface;

class Orcamento
{
    private $valor = 0;

    /**
     * @var EstadoInterface
     */
    private $estado;

    /**
     * @var array
     */
    private $itens = [];

    /**
     * @var bool
     */
    private $descontoExtraAplicado = false;

    public function __construct($valor = 0)
    {
        $this->valor = $valor;
        $this->estado = new EmAprovacao();
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function addItem(OrcamentoItem $item)
    {
        $this->itens[] = $item;
        $this->valor += $item->getValor();

        return $this->getValor();
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function setEstado(EstadoInterface $estado)
    {
        if ($this->estado === $estado) {
            return null;
        }

        $this->estado = $estado;
        $this->descontoExtraAplicado = false;
    }

    /**
     * @throws EstadoException
     */
    public function aplicarDescontoExtra()
    {
        if ($this->descontoExtraAplicado) {
            throw new EstadoException('O desconto extra já foi aplicado');
        }

        $this->valor -= $this->estado->aplicarDescontoExtra($this);
        $this->descontoExtraAplicado = true;
    }

    /**
     * @throws EstadoException
     */
    public function aprovar()
    {
        $this->estado->aprovar($this);
    }

    /**
     * @throws EstadoException
     */
    public function reprovar()
    {
        $this->estado->reprovar($this);
    }

    /**
     * @throws EstadoException
     */
    public function finalizar()
    {
        $this->estado->finalizar($this);
    }
}