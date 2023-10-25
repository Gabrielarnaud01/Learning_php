<?php
//Arquivo index responsável pela inicialização do sistem

use sistema\Nucleo\Helpers;
use sistema\Nucleo\Controlador;


require 'vendor/autoload.php';
//require 'rotas.php';

try {
    Helpers::validarCpf('12312312312');
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'oi';
}
