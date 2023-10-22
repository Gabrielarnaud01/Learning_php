<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
//Arquivo index responsável pela inicialização do sistema
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';
include './sistema/Nucleo/Mensagem.php';

//echo (new Mensagem())->erro('mensagem de erro')->renderizar();

use sistema\Nucleo\Mensagem;
//use sistema\Nucleo\Mensagem as msg;
//echo (new msg)->sucesso('texto de sucesso');


//teremos o mesmo resultado se tirar o use.
//echo (new \sistema\Nucleo\Mensagem)->sucesso('texto de sucesso');
echo (new Mensagem)->sucesso('texto de sucesso');




echo '<hr>';
