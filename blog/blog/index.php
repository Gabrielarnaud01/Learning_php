<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
//Arquivo index responsável pela inicialização do sistema
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';
include './sistema/Nucleo/Mensagem.php';
$msg = new Mensagem();
echo '<hr>';
echo $msg->sucesso('Mensagem de sucesso')->renderizar();
echo '<hr>';
echo $msg->erro('Mensagem de erro')->renderizar();
echo '<hr>';
var_dump($msg);
