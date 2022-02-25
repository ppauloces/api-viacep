<?php

require __DIR__ . '/vendor/autoload.php';

//INCLUINDO DEPENDENCIA
use \App\WebService\ViaCEP;

//VERIFICANDO A EXISTENCIA DO CEP NO TERMINAL
if(!isset($argv['1'])){
    die("CEP inválido\n");
}

$dadosCEP = ViaCEP::consultarCEP($argv['1']); 

//IMPRIME O RESULTADO
print_r($dadosCEP);