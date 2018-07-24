<?php

namespace DesignPatterns\State;

use DesignPatterns\Model\Orcamento;

interface EstadoInterface
{
    /**
     * @param Orcamento $orcamento
     * @return float
     */
    public function aplicarDescontoExtra(Orcamento $orcamento);

    /**
     * @param Orcamento $orcamento
     * @return null
     * @throws EstadoException
     */
    public function aprovar(Orcamento $orcamento);

    /**
     * @param Orcamento $orcamento
     * @return null
     * @throws EstadoException
     */
    public function reprovar(Orcamento $orcamento);

    /**
     * @param Orcamento $orcamento
     * @return null
     * @throws EstadoException
     */
    public function finalizar(Orcamento $orcamento);
}