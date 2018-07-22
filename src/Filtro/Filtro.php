<?php

namespace DesignPatterns\Filtro;

abstract class Filtro implements FiltroInterface
{
    /**
     * @var FiltroInterface
     */
    private $filtro;

    public function __construct(FiltroInterface $filtro = null)
    {
        $this->filtro = $filtro;
    }

    final protected function aplicarDemaisFiltros(array $contas)
    {
        return is_null($this->filtro) ? $contas : $this->filtro->filtra($contas);
    }

    abstract public function filtra(array $contas);
}