<?php
//Arquivo index responsável pela inicialização do sistema

require_once 'sistema/configuracao.php';
include_once 'Helpers.php';

$texto = '          texto para resumir';

/*
echo $total = mb_strlen(trim($texto));
echo '<hr>';
echo $resumo = mb_substr($texto, 2, 15);
echo '<hr>';
echo $ocorrencia = mb_strrpos($texto, 'e');
*/

//var_dump($string);

//echo saudacao();
//echo '<br>';

echo resumirTexto($texto, 10);
