<?php
//Arquivo index responsável pela inicialização do sistem
require 'vendor/autoload.php';

use sistema\Nucleo\Helpers;
use sistema\Nucleo\Controlador;


$document = new \Bissolli\ValidadorCpfCnpj\CPF('018.287.264-51');

var_dump($document->isValid());
