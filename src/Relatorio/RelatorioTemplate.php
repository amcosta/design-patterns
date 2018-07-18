<?php

namespace DesignPatterns\Relatorio;

abstract class RelatorioTemplate implements RelatorioInterface
{
    public function gerar()
    {
        $relatorio = '';

        $relatorio .= $this->cabecalho();

        $relatorio .= $this->conteudo();

        $relatorio .= $this->rodape();

        return $relatorio;
    }

    abstract protected function cabecalho();

    abstract protected function conteudo();

    abstract protected function rodape();
}