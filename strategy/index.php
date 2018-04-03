<?php

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$orcamento = new Orcamento(500);

$icms = new ICMS();
$iss = new ISS();
$iccc = new ICCC();

$calculadorDeImposto = new CalculadoraDeImposto();

echo "ICMS: " . $calculadorDeImposto->calcular($orcamento, $icms) . PHP_EOL;
echo "iss: " . $calculadorDeImposto->calcular($orcamento, $iss) . PHP_EOL;
echo "iccc (500): " . $calculadorDeImposto->calcular($orcamento, $iccc) . PHP_EOL;
echo "iccc (1500): " . $calculadorDeImposto->calcular(new Orcamento(1500), $iccc) . PHP_EOL;
echo "iccc (5000): " . $calculadorDeImposto->calcular(new Orcamento(5000), $iccc) . PHP_EOL;