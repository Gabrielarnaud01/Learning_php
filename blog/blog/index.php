<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
//Arquivo index responsável pela inicialização do sistema
require_once 'sistema/configuracao.php';
include_once './sistema/Nucleo/Helpers.php';
include './sistema/Nucleo/Mensagem.php';
include './sistema/Nucleo/Controlador.php';


use sistema\Nucleo\Helpers;
use sistema\Nucleo\Controlador;


$controlador = new Controlador('admin');
var_dump($controlador);
