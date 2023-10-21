<?php
//Arquivo index responsável pela inicialização do sistema

require_once 'sistema/configuracao.php';
include_once 'Helpers.php';

$texto = '<h1>texto</h1> <p>para</p> resumir';

echo resumirTexto($texto, 50);
