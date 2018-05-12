<?php

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$conta = new Conta(1000);

$calculadora = new RealizadorDeInvestimentos();

echo "Conservador: " . $calculadora->calcular($conta, new Conservador()) . PHP_EOL;
echo "Moderado: " . $calculadora->calcular($conta, new Moderado()) . PHP_EOL;
echo "Arrojado: " . $calculadora->calcular($conta, new Arrojado()) . PHP_EOL;