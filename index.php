<?php

require __DIR__ .'/vendor/autoload.php';

use App\webService\ViaCep;

$dateCep = ViaCep::consultZipCode($argv[1]);

if(!isset($argv[1])){
    die("CEP Não definido!\n");
}

print_r($dateCep);