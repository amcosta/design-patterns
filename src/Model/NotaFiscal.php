<?php


namespace DesignPatterns\Model;


class NotaFiscal
{
    private $valorBruto = 0;
    private $itens = [];
    private $empresa;
    private $cnpj;

    public function comEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function comCNPJ($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function adicionaritem(ItemDaNota $item)
    {
        $this->itens[] = $item;
        $this->valorBruto += $item->getValor();
    }
}